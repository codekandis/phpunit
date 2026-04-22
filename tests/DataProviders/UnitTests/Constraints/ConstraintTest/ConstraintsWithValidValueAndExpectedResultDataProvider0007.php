<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0007 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			7000 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7001 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7002 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7003 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7004 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7005 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7006 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7007 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7008 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7009 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7010 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7011 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7012 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7013 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7014 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7015 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7016 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7017 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7018 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7019 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7020 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7021 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7022 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7023 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7024 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7025 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7026 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7027 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7028 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7029 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7030 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7031 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7032 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7033 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7034 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7035 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7036 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7037 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7038 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7039 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7040 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7041 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7042 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7043 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7044 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7045 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7046 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7047 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7048 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7049 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7050 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7051 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7052 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7053 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7054 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7055 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7056 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7057 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7058 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7059 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7060 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7061 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7062 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7063 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7064 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7065 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7066 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7067 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7068 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7069 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7070 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7071 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7072 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7073 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7074 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7075 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7076 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7077 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7078 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7079 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7080 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7081 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7082 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7083 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7084 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7085 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7086 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7087 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7088 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7089 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7090 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7091 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7092 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7093 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7094 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7095 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7096 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7097 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7098 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7099 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7100 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7101 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7102 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7103 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7104 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7105 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7106 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7107 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7108 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7109 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7110 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7111 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7112 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7113 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7114 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7115 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7116 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7117 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7118 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7119 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7120 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7121 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7122 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7123 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7124 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7125 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7126 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7127 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7128 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7129 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7130 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7131 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7132 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7133 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7134 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7135 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7136 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7137 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7138 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7139 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7140 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7141 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7142 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7143 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7144 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7145 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7146 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7147 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7148 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7149 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7150 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7151 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7152 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7153 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7154 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7155 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7156 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7157 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7158 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7159 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7160 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7161 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7162 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7163 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7164 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7165 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7166 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7167 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7168 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7169 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7170 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7171 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7172 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7173 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7174 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7175 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7176 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7177 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7178 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7179 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7180 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7181 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7182 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7183 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7184 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7185 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7186 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7187 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7188 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7189 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7190 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7191 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7192 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7193 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7194 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7195 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7196 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7197 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7198 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7199 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7200 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7201 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7202 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7203 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7204 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7205 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7206 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7207 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7208 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7209 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7210 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7211 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7212 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7213 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7214 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7215 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7216 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7217 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7218 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7219 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7220 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7221 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7222 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7223 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7224 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7225 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7226 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7227 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7228 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7229 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7230 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7231 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7232 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7233 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7234 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7235 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7236 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7237 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7238 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7239 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7240 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7241 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7242 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7243 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7244 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7245 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7246 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7247 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7248 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7249 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7250 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7251 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7252 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7253 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7254 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7255 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7256 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7257 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7258 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7259 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7260 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7261 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7262 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7263 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7264 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7265 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7266 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7267 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7268 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7269 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7270 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7271 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7272 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7273 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7274 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7275 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7276 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7277 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7278 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7279 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7280 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7281 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7282 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7283 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7284 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7285 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7286 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7287 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7288 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7289 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7290 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7291 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7292 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7293 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7294 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7295 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7296 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7297 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7298 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7299 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7300 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7301 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7302 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7303 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7304 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7305 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7306 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7307 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7308 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7309 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7310 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7311 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7312 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7313 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7314 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7315 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7316 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7317 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7318 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7319 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7320 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7321 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7322 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7323 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7324 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7325 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7326 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7327 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7328 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7329 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7330 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7331 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7332 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7333 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7334 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7335 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7336 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7337 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7338 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7339 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7340 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7341 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7342 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7343 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7344 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7345 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7346 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7347 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7348 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7349 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7350 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7351 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7352 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7353 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7354 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7355 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7356 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7357 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7358 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7359 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7360 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7361 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7362 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7363 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7364 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7365 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7366 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7367 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7368 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7369 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7370 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7371 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7372 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7373 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7374 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7375 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7376 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7377 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7378 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7379 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7380 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7381 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7382 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7383 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7384 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7385 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7386 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7387 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7388 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7389 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7390 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7391 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7392 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7393 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7394 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7395 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7396 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7397 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7398 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7399 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7400 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7401 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7402 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7403 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7404 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7405 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7406 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7407 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7408 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7409 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7410 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7411 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7412 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7413 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7414 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7415 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7416 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7417 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7418 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7419 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7420 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7421 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7422 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7423 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7424 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7425 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7426 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7427 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7428 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7429 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7430 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7431 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7432 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7433 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7434 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7435 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7436 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7437 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7438 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7439 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7440 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7441 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7442 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7443 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7444 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7445 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7446 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7447 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7448 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7449 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7450 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7451 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7452 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7453 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7454 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7455 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7456 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7457 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7458 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7459 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7460 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7461 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7462 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7463 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7464 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7465 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7466 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7467 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7468 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7469 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7470 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7471 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7472 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7473 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7474 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7475 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7476 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7477 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7478 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7479 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7480 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7481 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7482 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7483 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7484 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7485 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7486 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7487 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7488 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7489 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7490 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7491 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7492 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7493 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7494 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7495 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7496 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7497 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7498 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7499 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7500 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7501 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7502 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7503 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7504 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7505 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7506 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7507 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7508 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7509 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7510 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7511 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7512 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7513 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7514 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7515 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7516 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7517 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7518 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7519 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7520 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7521 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7522 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7523 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7524 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7525 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7526 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7527 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7528 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7529 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7530 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7531 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7532 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7533 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7534 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7535 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7536 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7537 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7538 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7539 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7540 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7541 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7542 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7543 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7544 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7545 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7546 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7547 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7548 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7549 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7550 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7551 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7552 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7553 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7554 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7555 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7556 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7557 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7558 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7559 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7560 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7561 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7562 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7563 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7564 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7565 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7566 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7567 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7568 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7569 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7570 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7571 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7572 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7573 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7574 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7575 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7576 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7577 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7578 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7579 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7580 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7581 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7582 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7583 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7584 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7585 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7586 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7587 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7588 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7589 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7590 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7591 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7592 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7593 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7594 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7595 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7596 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7597 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7598 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7599 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7600 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7601 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7602 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7603 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7604 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7605 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7606 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7607 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7608 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7609 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7610 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7611 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7612 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7613 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7614 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7615 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7616 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7617 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7618 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7619 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7620 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7621 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7622 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7623 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7624 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7625 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7626 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7627 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7628 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7629 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7630 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7631 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7632 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7633 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7634 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7635 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7636 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7637 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7638 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7639 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7640 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7641 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7642 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7643 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7644 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7645 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7646 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7647 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7648 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7649 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7650 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7651 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7652 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7653 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7654 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7655 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7656 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7657 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7658 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7659 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7660 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7661 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7662 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7663 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7664 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7665 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7666 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7667 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7668 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7669 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7670 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7671 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7672 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7673 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7674 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7675 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7676 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7677 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7678 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7679 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7680 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7681 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7682 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7683 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7684 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7685 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7686 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7687 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7688 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7689 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7690 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7691 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7692 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7693 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7694 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7695 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7696 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7697 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7698 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7699 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7700 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7701 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7702 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7703 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7704 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7705 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7706 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7707 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7708 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7709 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7710 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7711 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7712 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7713 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7714 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7715 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7716 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7717 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7718 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7719 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7720 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7721 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7722 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7723 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7724 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7725 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7726 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7727 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7728 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7729 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7730 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7731 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7732 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7733 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7734 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7735 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7736 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7737 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7738 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7739 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7740 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7741 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7742 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7743 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7744 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7745 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7746 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7747 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7748 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7749 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7750 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7751 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7752 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7753 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7754 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7755 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7756 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7757 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7758 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7759 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7760 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7761 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7762 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7763 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7764 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7765 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7766 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7767 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7768 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7769 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7770 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7771 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7772 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7773 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7774 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7775 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7776 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7777 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7778 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7779 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7780 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7781 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7782 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7783 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7784 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7785 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7786 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7787 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7788 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7789 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7790 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7791 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7792 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7793 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7794 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7795 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7796 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7797 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7798 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7799 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7800 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7801 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7802 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7803 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7804 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7805 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7806 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7807 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7808 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7809 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7810 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7811 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7812 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7813 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7814 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7815 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7816 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7817 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7818 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7819 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7820 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7821 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7822 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7823 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7824 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7825 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7826 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7827 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7828 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7829 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7830 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7831 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7832 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7833 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7834 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7835 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7836 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7837 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7838 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7839 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7840 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7841 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7842 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7843 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7844 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7845 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7846 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7847 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7848 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7849 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7850 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7851 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7852 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7853 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7854 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7855 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7856 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7857 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7858 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7859 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7860 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7861 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7862 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7863 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7864 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7865 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7866 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7867 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7868 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7869 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7870 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7871 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7872 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7873 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7874 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7875 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7876 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7877 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7878 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7879 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7880 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7881 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7882 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7883 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7884 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7885 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7886 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7887 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7888 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7889 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7890 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7891 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7892 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7893 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7894 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7895 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7896 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7897 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7898 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7899 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7900 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7901 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7902 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7903 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7904 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7905 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7906 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7907 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7908 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7909 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7910 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7911 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7912 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7913 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7914 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7915 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7916 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7917 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7918 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7919 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7920 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7921 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7922 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7923 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7924 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7925 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7926 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7927 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7928 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7929 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7930 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7931 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7932 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7933 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7934 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7935 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7936 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7937 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7938 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7939 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7940 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7941 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7942 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7943 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7944 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7945 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7946 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7947 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7948 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7949 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7950 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7951 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7952 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7953 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7954 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7955 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7956 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7957 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7958 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7959 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7960 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7961 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7962 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7963 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7964 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7965 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7966 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7967 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7968 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7969 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7970 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7971 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7972 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7973 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7974 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7975 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7976 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7977 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7978 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7979 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7980 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7981 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7982 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7983 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7984 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7985 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7986 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7987 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7988 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7989 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7990 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7991 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7992 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7993 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7994 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7995 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7996 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7997 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7998 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			7999 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
