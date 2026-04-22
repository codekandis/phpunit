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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0013 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			13000 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13001 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13002 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13003 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13004 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13005 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13006 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13007 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13008 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13009 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13010 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13011 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13012 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13013 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13014 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13015 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13016 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13017 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13018 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13019 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13020 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13021 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13022 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13023 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13024 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13025 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13026 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13027 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13028 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13029 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13030 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13031 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13032 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13033 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13034 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13035 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13036 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13037 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13038 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13039 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13040 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13041 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13042 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13043 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13044 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13045 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13046 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13047 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13048 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13049 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13050 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13051 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13052 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13053 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13054 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13055 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13056 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13057 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13058 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13059 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13060 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13061 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13062 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13063 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13064 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13065 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13066 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13067 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13068 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13069 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13070 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13071 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13072 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13073 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13074 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13075 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13076 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13077 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13078 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13079 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13080 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13081 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13082 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13083 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13084 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13085 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13086 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13087 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13088 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13089 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13090 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13091 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13092 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13093 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13094 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13095 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13096 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13097 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13098 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13099 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13100 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13101 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13102 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13103 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13104 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13105 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13106 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13107 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13108 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13109 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13110 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13111 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13112 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13113 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13114 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13115 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13116 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13117 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13118 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13119 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13120 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13121 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13122 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13123 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13124 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13125 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13126 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13127 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13128 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13129 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13130 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13131 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13132 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13133 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13134 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13135 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13136 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13137 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13138 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13139 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13140 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13141 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13142 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13143 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13144 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13145 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13146 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13147 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13148 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13149 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13150 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13151 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13152 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13153 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13154 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13155 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13156 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13157 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13158 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13159 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13160 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13161 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13162 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13163 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13164 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13165 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13166 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13167 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13168 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13169 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13170 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13171 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13172 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13173 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13174 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13175 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13176 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13177 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13178 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13179 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13180 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13181 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13182 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13183 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13184 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13185 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13186 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13187 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13188 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13189 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13190 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13191 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13192 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13193 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13194 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13195 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13196 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13197 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13198 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13199 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13200 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13201 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13202 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13203 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13204 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13205 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13206 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13207 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13208 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13209 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13210 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13211 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13212 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13213 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13214 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13215 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13216 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13217 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13218 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13219 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13220 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13221 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13222 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13223 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13224 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13225 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13226 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13227 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13228 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13229 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13230 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13231 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13232 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13233 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13234 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13235 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13236 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13237 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13238 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13239 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13240 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13241 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13242 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13243 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13244 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13245 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13246 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13247 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13248 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13249 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13250 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13251 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13252 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13253 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13254 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13255 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13256 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13257 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13258 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13259 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13260 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13261 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13262 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13263 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13264 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13265 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13266 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13267 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13268 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13269 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13270 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13271 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13272 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13273 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13274 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13275 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13276 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13277 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13278 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13279 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13280 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13281 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13282 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13283 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13284 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13285 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13286 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13287 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13288 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13289 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13290 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13291 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13292 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13293 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13294 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13295 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13296 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13297 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13298 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13299 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13300 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13301 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13302 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13303 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13304 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13305 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13306 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13307 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13308 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13309 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13310 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13311 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13312 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13313 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13314 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13315 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13316 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13317 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13318 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13319 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13320 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13321 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13322 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13323 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13324 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13325 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13326 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13327 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13328 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13329 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13330 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13331 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13332 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13333 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13334 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13335 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13336 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13337 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13338 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13339 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13340 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13341 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13342 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13343 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13344 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13345 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13346 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13347 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13348 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13349 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13350 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13351 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13352 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13353 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13354 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13355 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13356 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13357 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13358 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13359 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13360 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13361 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13362 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			13363 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13364 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
