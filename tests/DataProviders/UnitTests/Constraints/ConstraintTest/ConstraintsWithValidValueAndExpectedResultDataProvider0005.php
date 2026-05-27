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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0005 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			5000 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5001 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5002 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5003 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5004 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5005 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5006 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5007 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5008 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5009 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5010 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5011 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5012 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5013 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5014 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5015 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5016 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5017 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5018 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5019 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5020 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5021 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5022 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5023 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5024 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5025 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5026 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5027 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5028 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5029 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5030 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5031 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5032 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5033 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5034 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5035 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5036 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5037 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5038 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5039 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5040 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5041 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5042 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5043 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5044 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5045 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5046 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5047 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5048 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5049 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5050 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5051 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5052 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5053 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5054 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5055 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5056 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5057 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5058 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5059 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5060 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5061 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5062 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5063 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5064 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5065 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5066 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5067 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5068 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5069 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5070 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5071 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5072 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5073 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5074 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5075 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5076 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5077 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5078 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5079 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5080 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5081 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5082 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5083 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5084 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5085 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5086 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5087 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5088 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5089 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5090 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5091 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5092 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5093 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5094 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5095 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5096 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5097 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5098 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5099 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5100 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5101 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5102 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5103 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5104 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5105 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5106 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5107 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5108 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5109 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5110 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5111 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5112 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5113 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5114 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5115 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5116 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5117 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5118 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5119 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5120 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5121 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5122 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5123 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5124 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5125 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5126 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5127 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5128 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5129 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5130 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5131 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5132 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5133 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5134 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5135 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5136 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5137 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5138 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5139 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5140 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5141 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5142 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5143 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5144 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5145 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5146 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5147 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5148 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5149 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5150 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5151 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5152 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5153 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5154 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5155 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5156 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5157 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5158 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5159 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5160 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5161 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5162 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5163 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5164 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5165 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5166 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5167 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5168 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5169 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5170 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5171 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5172 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5173 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5174 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5175 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5176 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5177 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5178 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5179 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5180 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5181 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5182 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5183 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5184 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5185 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5186 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5187 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5188 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5189 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5190 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5191 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5192 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5193 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5194 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5195 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5196 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5197 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5198 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5199 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5200 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5201 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5202 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5203 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5204 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5205 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5206 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5207 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5208 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5209 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5210 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5211 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5212 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5213 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5214 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5215 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5216 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5217 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5218 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5219 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5220 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5221 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5222 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5223 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5224 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5225 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5226 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5227 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5228 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5229 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5230 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5231 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5232 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5233 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5234 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5235 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5236 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5237 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5238 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5239 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5240 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5241 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5242 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5243 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5244 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5245 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5246 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5247 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5248 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5249 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5250 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5251 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5252 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5253 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5254 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5255 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5256 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5257 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5258 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5259 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5260 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5261 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5262 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5263 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5264 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5265 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5266 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5267 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5268 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5269 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5270 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5271 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5272 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5273 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5274 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5275 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5276 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5277 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5278 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5279 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5280 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5281 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5282 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5283 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5284 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5285 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5286 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5287 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5288 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5289 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5290 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5291 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5292 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5293 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5294 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5295 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5296 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5297 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5298 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5299 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5300 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5301 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5302 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5303 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5304 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5305 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5306 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5307 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5308 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5309 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5310 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5311 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5312 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5313 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5314 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5315 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5316 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5317 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5318 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5319 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5320 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5321 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5322 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5323 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5324 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5325 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5326 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5327 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5328 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5329 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5330 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5331 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5332 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5333 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5334 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5335 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5336 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5337 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5338 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5339 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5340 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5341 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5342 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5343 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5344 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5345 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5346 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5347 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5348 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5349 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5350 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5351 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5352 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5353 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5354 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5355 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5356 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5357 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5358 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5359 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5360 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5361 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5362 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5363 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5364 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5365 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5366 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5367 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5368 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5369 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5370 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5371 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5372 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5373 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5374 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5375 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5376 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5377 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5378 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5379 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5380 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5381 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5382 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5383 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5384 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5385 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5386 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5387 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5388 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5389 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5390 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5391 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5392 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5393 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5394 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5395 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5396 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5397 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5398 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5399 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5400 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5401 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5402 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5403 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5404 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5405 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5406 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5407 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5408 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5409 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5410 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5411 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5412 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5413 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5414 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5415 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5416 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5417 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5418 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5419 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5420 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5421 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5422 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5423 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5424 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5425 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5426 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5427 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5428 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5429 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5430 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5431 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5432 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5433 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5434 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5435 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5436 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5437 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5438 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5439 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5440 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5441 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5442 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5443 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5444 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5445 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5446 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5447 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5448 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5449 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5450 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5451 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5452 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5453 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5454 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5455 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5456 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5457 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5458 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5459 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5460 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5461 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5462 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5463 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5464 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5465 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5466 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5467 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5468 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5469 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5470 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5471 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5472 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5473 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5474 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5475 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5476 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5477 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5478 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5479 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5480 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5481 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5482 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5483 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5484 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5485 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5486 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5487 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5488 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5489 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5490 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5491 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5492 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5493 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5494 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5495 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5496 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5497 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5498 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5499 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5500 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5501 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5502 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5503 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5504 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5505 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5506 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5507 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5508 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5509 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5510 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5511 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5512 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5513 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5514 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5515 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5516 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5517 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5518 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5519 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5520 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5521 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5522 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5523 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5524 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5525 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5526 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5527 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5528 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5529 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5530 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5531 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5532 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5533 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5534 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5535 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5536 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5537 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5538 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5539 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5540 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5541 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5542 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5543 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5544 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5545 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5546 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5547 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5548 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5549 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5550 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5551 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5552 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5553 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5554 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5555 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5556 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5557 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5558 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5559 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5560 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5561 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5562 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5563 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5564 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5565 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5566 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5567 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5568 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5569 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5570 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5571 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5572 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5573 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5574 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5575 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5576 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5577 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5578 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5579 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5580 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5581 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5582 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5583 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5584 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5585 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5586 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5587 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5588 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5589 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5590 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5591 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5592 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5593 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5594 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5595 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5596 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5597 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5598 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5599 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5600 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5601 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5602 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5603 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5604 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5605 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5606 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5607 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5608 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5609 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5610 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5611 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5612 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5613 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5614 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5615 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5616 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5617 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5618 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5619 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5620 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5621 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5622 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5623 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5624 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5625 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5626 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5627 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5628 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5629 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5630 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5631 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5632 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5633 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5634 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5635 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5636 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5637 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5638 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5639 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5640 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5641 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5642 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5643 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5644 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5645 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5646 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5647 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5648 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5649 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5650 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5651 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5652 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5653 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5654 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5655 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5656 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5657 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5658 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5659 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5660 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5661 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5662 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5663 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5664 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5665 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5666 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5667 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5668 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5669 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5670 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5671 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5672 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5673 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5674 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5675 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5676 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5677 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5678 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5679 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5680 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5681 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5682 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5683 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5684 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5685 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5686 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5687 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5688 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5689 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5690 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5691 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5692 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5693 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5694 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5695 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5696 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5697 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5698 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5699 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5700 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5701 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5702 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5703 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5704 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5705 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5706 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5707 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5708 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5709 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5710 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5711 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5712 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5713 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5714 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5715 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5716 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5717 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5718 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5719 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5720 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5721 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5722 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5723 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5724 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5725 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5726 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5727 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5728 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5729 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5730 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5731 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5732 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5733 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5734 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5735 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5736 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5737 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5738 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5739 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5740 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5741 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5742 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5743 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5744 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5745 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5746 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5747 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5748 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5749 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5750 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5751 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5752 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5753 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5754 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5755 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5756 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5757 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5758 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5759 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5760 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5761 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5762 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5763 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5764 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5765 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5766 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5767 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5768 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5769 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5770 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5771 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5772 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5773 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5774 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5775 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5776 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5777 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5778 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5779 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5780 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5781 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5782 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5783 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5784 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5785 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5786 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5787 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5788 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5789 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5790 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5791 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5792 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5793 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5794 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5795 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5796 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5797 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5798 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5799 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5800 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5801 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5802 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5803 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5804 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5805 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5806 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5807 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5808 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5809 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5810 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5811 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5812 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5813 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5814 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5815 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5816 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5817 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5818 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5819 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5820 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5821 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5822 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5823 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5824 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5825 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5826 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5827 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5828 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5829 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5830 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5831 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5832 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5833 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5834 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5835 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5836 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5837 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5838 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5839 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5840 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5841 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5842 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5843 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5844 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5845 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5846 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5847 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5848 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5849 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5850 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5851 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5852 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5853 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5854 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5855 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5856 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5857 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5858 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5859 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5860 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5861 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5862 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5863 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5864 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5865 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5866 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5867 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5868 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5869 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5870 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5871 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5872 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5873 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5874 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5875 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5876 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5877 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5878 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5879 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5880 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5881 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5882 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5883 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5884 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5885 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5886 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5887 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5888 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5889 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5890 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5891 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5892 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5893 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5894 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5895 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5896 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5897 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5898 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5899 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5900 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5901 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5902 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5903 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5904 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5905 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5906 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5907 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5908 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5909 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5910 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5911 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5912 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5913 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5914 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5915 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5916 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5917 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5918 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5919 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5920 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5921 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5922 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5923 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5924 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5925 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5926 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5927 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5928 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5929 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5930 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5931 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5932 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5933 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5934 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5935 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5936 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5937 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5938 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5939 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5940 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5941 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5942 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5943 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5944 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5945 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5946 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5947 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5948 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5949 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5950 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5951 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5952 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5953 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5954 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5955 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5956 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5957 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5958 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5959 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5960 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5961 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5962 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5963 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5964 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5965 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5966 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5967 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5968 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5969 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5970 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5971 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5972 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5973 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5974 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5975 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5976 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5977 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5978 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5979 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5980 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5981 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5982 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5983 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5984 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5985 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5986 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5987 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5988 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5989 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5990 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			5991 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5992 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5993 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5994 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5995 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5996 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5997 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5998 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5999 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
