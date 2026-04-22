<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0012 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			12000 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12001 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12002 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12003 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12004 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12005 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12006 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12007 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12008 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12009 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12010 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12011 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12012 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12013 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12014 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12015 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12016 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12017 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12018 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12019 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12020 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12021 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12022 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12023 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12024 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12025 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12026 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12027 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12028 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12029 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12030 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12031 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12032 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12033 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12034 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12035 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12036 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12037 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12038 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12039 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12040 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12041 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12042 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12043 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12044 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12045 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12046 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12047 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12048 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12049 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12050 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12051 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12052 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12053 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12054 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12055 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12056 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12057 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12058 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12059 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12060 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12061 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12062 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12063 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12064 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12065 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12066 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12067 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12068 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12069 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12070 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12071 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12072 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12073 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12074 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12075 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12076 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12077 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12078 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12079 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12080 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12081 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12082 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12083 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12084 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12085 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12086 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12087 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12088 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12089 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12090 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12091 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12092 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12093 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12094 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12095 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12096 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12097 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12098 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12099 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12100 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12101 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12102 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12103 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12104 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12105 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12106 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12107 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12108 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12109 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12110 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12111 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12112 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12113 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12114 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12115 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12116 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12117 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12118 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12119 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12120 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12121 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12122 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12123 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12124 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12125 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12126 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12127 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12128 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12129 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12130 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12131 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12132 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12133 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12134 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12135 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12136 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12137 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12138 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12139 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12140 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12141 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12142 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12143 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12144 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12145 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12146 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12147 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12148 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12149 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12150 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12151 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12152 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12153 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12154 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12155 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12156 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12157 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12158 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12159 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12160 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12161 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12162 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12163 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12164 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12165 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12166 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12167 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12168 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12169 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12170 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12171 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12172 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12173 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12174 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12175 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12176 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12177 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12178 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12179 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12180 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12181 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12182 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12183 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12184 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12185 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12186 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12187 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12188 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12189 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12190 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12191 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12192 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12193 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12194 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12195 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12196 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12197 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12198 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12199 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12200 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12201 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12202 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12203 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12204 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12205 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12206 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12207 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12208 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12209 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12210 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12211 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12212 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12213 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12214 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12215 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12216 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12217 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12218 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12219 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12220 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12221 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12222 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12223 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12224 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12225 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12226 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12227 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12228 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12229 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12230 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12231 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12232 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12233 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12234 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12235 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12236 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12237 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12238 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12239 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12240 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12241 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12242 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12243 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12244 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12245 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12246 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12247 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12248 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12249 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12250 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12251 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12252 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12253 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12254 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12255 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12256 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12257 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12258 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12259 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12260 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12261 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12262 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12263 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12264 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12265 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12266 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12267 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12268 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12269 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12270 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12271 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12272 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12273 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12274 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12275 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12276 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12277 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12278 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12279 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12280 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12281 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12282 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12283 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12284 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12285 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12286 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12287 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12288 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12289 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12290 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12291 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12292 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12293 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12294 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12295 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12296 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12297 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12298 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12299 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12300 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12301 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12302 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12303 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12304 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12305 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12306 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12307 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12308 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12309 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12310 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12311 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12312 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12313 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12314 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12315 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12316 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12317 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12318 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12319 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12320 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12321 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12322 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12323 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12324 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12325 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12326 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12327 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12328 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12329 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12330 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12331 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12332 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12333 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12334 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12335 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12336 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12337 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12338 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12339 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12340 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12341 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12342 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12343 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12344 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12345 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12346 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12347 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12348 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12349 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12350 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12351 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12352 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12353 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12354 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12355 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12356 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12357 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12358 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12359 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12360 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12361 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12362 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12363 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12364 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12365 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12366 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12367 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12368 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12369 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12370 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12371 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12372 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12373 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12374 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12375 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12376 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12377 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12378 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12379 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12380 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12381 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12382 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12383 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12384 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12385 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12386 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12387 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12388 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12389 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12390 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12391 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12392 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12393 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12394 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12395 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12396 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12397 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12398 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12399 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12400 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12401 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12402 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12403 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12404 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12405 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12406 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12407 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12408 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12409 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12410 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12411 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12412 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12413 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12414 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12415 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12416 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12417 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12418 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12419 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12420 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12421 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12422 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12423 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12424 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12425 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12426 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12427 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12428 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12429 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12430 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12431 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12432 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12433 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12434 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12435 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12436 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12437 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12438 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12439 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12440 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12441 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12442 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12443 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12444 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12445 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12446 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12447 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12448 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12449 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12450 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12451 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12452 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12453 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12454 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12455 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12456 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12457 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12458 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12459 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12460 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12461 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12462 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12463 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12464 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12465 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12466 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12467 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12468 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12469 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12470 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12471 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12472 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12473 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12474 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12475 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12476 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12477 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12478 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12479 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12480 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12481 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12482 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12483 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12484 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12485 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12486 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12487 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12488 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12489 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12490 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12491 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12492 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12493 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12494 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12495 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12496 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12497 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12498 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12499 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12500 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12501 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12502 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12503 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12504 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12505 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12506 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12507 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12508 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12509 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12510 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12511 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12512 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12513 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12514 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12515 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12516 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12517 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12518 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12519 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12520 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12521 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12522 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12523 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12524 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12525 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12526 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12527 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12528 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12529 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12530 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12531 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12532 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12533 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12534 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12535 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12536 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12537 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12538 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12539 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12540 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12541 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12542 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12543 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12544 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12545 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12546 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12547 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12548 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12549 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12550 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12551 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12552 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12553 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12554 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12555 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12556 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12557 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12558 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12559 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12560 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12561 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12562 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12563 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12564 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12565 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12566 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12567 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12568 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12569 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12570 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12571 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12572 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12573 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12574 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12575 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12576 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12577 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12578 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12579 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12580 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12581 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12582 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12583 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12584 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12585 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12586 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12587 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12588 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12589 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12590 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12591 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12592 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12593 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12594 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12595 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12596 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12597 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12598 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12599 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12600 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12601 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12602 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12603 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12604 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12605 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12606 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12607 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12608 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12609 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12610 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12611 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12612 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12613 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12614 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12615 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12616 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12617 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12618 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12619 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12620 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12621 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12622 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12623 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12624 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12625 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12626 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12627 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12628 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12629 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12630 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12631 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12632 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12633 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12634 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12635 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12636 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12637 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12638 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12639 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12640 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12641 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12642 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12643 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12644 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12645 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12646 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12647 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12648 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12649 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12650 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12651 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12652 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12653 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12654 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12655 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12656 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12657 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12658 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12659 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12660 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12661 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12662 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12663 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12664 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12665 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12666 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12667 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12668 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12669 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12670 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12671 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12672 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12673 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12674 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12675 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12676 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12677 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12678 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12679 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12680 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12681 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12682 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12683 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12684 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12685 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12686 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12687 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12688 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12689 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12690 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12691 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12692 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12693 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12694 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12695 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12696 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12697 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12698 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12699 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12700 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12701 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12702 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12703 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12704 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12705 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12706 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12707 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12708 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12709 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12710 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12711 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12712 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12713 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12714 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12715 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12716 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12717 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12718 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12719 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12720 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12721 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12722 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12723 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12724 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12725 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12726 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12727 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12728 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12729 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12730 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12731 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12732 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12733 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12734 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12735 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12736 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12737 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12738 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12739 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12740 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12741 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12742 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12743 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12744 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12745 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12746 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12747 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12748 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12749 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12750 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12751 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12752 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12753 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12754 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12755 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12756 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12757 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12758 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12759 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12760 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12761 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12762 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12763 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12764 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12765 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12766 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12767 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12768 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12769 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12770 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12771 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12772 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12773 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12774 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12775 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12776 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12777 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12778 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12779 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12780 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12781 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12782 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12783 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12784 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12785 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12786 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12787 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12788 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12789 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12790 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12791 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12792 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12793 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12794 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12795 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12796 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12797 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12798 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12799 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12800 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12801 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12802 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12803 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12804 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12805 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12806 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12807 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12808 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12809 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12810 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12811 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12812 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12813 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12814 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12815 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12816 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12817 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12818 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12819 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12820 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12821 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12822 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12823 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12824 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12825 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12826 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12827 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12828 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12829 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12830 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12831 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12832 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12833 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12834 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12835 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12836 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12837 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12838 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12839 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12840 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12841 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12842 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12843 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12844 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12845 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12846 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12847 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12848 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12849 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12850 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12851 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12852 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12853 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12854 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12855 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12856 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12857 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12858 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12859 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12860 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12861 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12862 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12863 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12864 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12865 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12866 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12867 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12868 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12869 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12870 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12871 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12872 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12873 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12874 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12875 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12876 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12877 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12878 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12879 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12880 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12881 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12882 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12883 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12884 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12885 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12886 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12887 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12888 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12889 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12890 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12891 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12892 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12893 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12894 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12895 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12896 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12897 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12898 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12899 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12900 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12901 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12902 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12903 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12904 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12905 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12906 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12907 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12908 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12909 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12910 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12911 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12912 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12913 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12914 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12915 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12916 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12917 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12918 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12919 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12920 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12921 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12922 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12923 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12924 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12925 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12926 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12927 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12928 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12929 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12930 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12931 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12932 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12933 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12934 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12935 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12936 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12937 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12938 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12939 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12940 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12941 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12942 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12943 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12944 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12945 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12946 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12947 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12948 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12949 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12950 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12951 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12952 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12953 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12954 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12955 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12956 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12957 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12958 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12959 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12960 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12961 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12962 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12963 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12964 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12965 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12966 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12967 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12968 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12969 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12970 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12971 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12972 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12973 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12974 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			12975 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12976 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12977 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12978 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12979 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12980 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12981 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12982 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12983 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12984 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12985 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12986 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12987 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12988 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12989 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12990 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12991 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12992 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12993 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12994 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12995 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12996 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12997 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12998 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12999 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
