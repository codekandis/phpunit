<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0002 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			2000 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2001 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2002 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2003 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2004 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2005 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2006 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2007 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2008 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2009 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2010 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2011 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2012 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2013 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2014 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2015 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2016 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2017 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2018 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2019 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2020 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2021 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2022 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2023 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2024 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2025 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2026 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2027 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2028 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2029 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2030 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2031 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2032 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2033 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2034 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2035 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2036 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2037 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2038 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2039 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2040 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2041 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2042 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2043 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2044 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2045 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2046 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2047 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2048 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2049 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2050 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2051 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2052 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2053 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2054 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2055 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2056 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2057 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2058 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2059 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2060 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2061 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2062 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2063 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2064 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2065 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2066 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2067 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2068 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2069 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2070 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2071 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2072 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2073 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2074 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2075 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2076 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2077 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2078 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2079 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2080 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2081 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2082 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2083 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2084 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2085 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2086 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2087 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2088 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2089 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2090 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2091 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2092 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2093 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2094 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2095 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2096 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2097 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2098 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2099 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2100 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2101 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2102 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2103 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2104 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2105 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2106 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2107 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2108 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2109 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2110 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2111 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2112 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2113 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2114 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2115 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2116 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2117 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2118 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2119 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2120 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2121 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2122 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2123 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2124 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2125 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2126 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2127 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2128 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2129 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2130 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2131 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2132 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2133 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2134 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2135 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2136 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2137 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2138 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2139 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2140 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2141 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2142 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2143 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2144 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2145 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2146 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2147 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2148 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2149 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2150 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2151 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2152 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2153 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2154 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2155 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2156 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2157 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2158 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2159 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2160 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2161 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2162 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2163 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2164 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2165 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2166 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2167 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2168 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2169 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2170 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2171 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2172 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2173 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2174 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2175 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2176 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2177 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2178 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2179 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2180 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2181 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2182 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2183 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2184 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2185 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2186 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2187 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2188 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2189 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2190 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2191 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2192 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2193 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2194 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2195 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2196 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2197 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2198 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2199 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2200 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2201 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2202 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2203 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2204 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2205 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2206 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2207 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2208 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2209 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2210 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2211 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2212 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2213 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2214 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2215 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2216 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2217 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2218 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2219 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2220 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2221 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2222 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2223 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2224 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2225 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2226 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2227 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2228 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2229 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2230 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2231 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2232 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2233 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2234 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2235 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2236 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2237 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2238 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2239 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2240 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2241 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2242 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2243 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2244 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2245 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2246 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2247 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2248 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2249 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2250 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2251 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2252 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2253 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2254 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2255 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2256 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2257 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2258 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2259 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2260 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2261 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2262 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2263 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2264 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2265 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2266 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2267 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2268 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2269 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2270 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2271 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2272 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2273 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2274 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2275 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2276 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2277 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2278 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2279 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2280 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2281 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2282 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2283 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2284 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2285 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2286 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2287 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2288 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2289 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2290 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2291 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2292 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2293 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2294 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2295 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2296 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2297 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2298 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2299 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2300 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2301 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2302 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2303 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2304 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2305 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2306 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2307 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2308 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2309 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2310 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2311 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2312 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2313 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2314 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2315 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2316 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2317 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2318 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2319 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2320 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2321 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2322 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2323 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2324 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2325 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2326 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2327 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2328 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2329 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2330 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2331 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2332 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2333 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2334 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2335 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2336 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2337 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2338 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2339 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2340 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2341 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2342 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2343 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2344 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2345 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2346 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2347 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2348 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2349 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2350 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2351 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2352 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2353 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2354 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2355 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2356 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2357 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2358 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2359 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2360 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2361 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2362 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2363 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2364 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2365 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2366 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2367 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2368 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2369 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2370 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2371 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2372 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2373 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2374 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2375 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2376 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2377 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2378 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2379 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2380 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2381 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2382 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2383 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2384 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2385 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2386 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2387 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2388 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2389 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2390 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2391 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2392 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2393 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2394 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2395 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2396 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2397 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2398 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2399 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2400 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2401 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2402 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2403 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2404 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2405 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2406 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2407 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2408 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2409 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2410 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2411 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2412 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2413 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2414 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2415 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2416 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2417 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2418 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2419 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2420 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2421 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2422 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2423 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2424 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2425 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2426 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2427 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2428 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2429 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2430 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2431 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2432 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2433 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2434 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2435 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2436 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2437 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2438 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2439 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2440 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2441 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2442 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2443 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2444 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2445 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2446 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2447 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2448 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2449 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2450 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2451 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2452 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2453 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2454 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2455 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2456 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2457 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2458 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2459 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2460 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2461 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2462 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2463 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2464 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2465 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2466 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2467 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2468 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2469 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2470 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2471 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2472 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2473 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2474 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2475 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2476 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2477 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2478 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2479 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2480 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2481 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2482 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2483 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2484 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2485 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2486 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2487 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2488 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2489 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2490 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2491 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2492 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2493 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2494 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2495 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2496 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2497 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2498 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2499 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2500 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2501 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2502 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2503 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2504 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2505 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2506 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2507 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2508 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2509 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2510 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2511 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2512 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2513 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2514 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2515 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2516 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2517 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2518 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2519 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2520 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2521 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2522 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2523 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2524 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2525 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2526 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2527 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2528 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2529 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2530 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2531 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2532 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2533 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2534 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2535 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2536 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2537 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2538 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2539 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2540 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2541 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2542 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2543 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2544 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2545 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2546 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2547 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2548 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2549 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2550 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2551 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2552 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2553 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2554 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2555 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2556 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2557 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2558 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2559 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2560 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2561 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2562 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2563 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2564 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2565 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2566 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2567 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2568 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2569 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2570 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2571 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2572 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2573 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2574 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2575 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2576 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2577 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2578 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2579 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2580 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2581 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2582 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2583 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2584 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2585 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2586 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2587 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2588 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2589 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2590 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2591 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2592 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2593 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2594 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2595 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2596 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2597 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2598 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2599 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2600 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2601 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2602 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2603 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2604 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2605 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2606 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2607 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2608 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2609 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2610 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2611 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2612 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2613 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2614 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2615 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2616 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2617 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2618 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2619 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2620 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2621 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2622 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2623 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2624 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2625 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2626 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2627 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2628 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2629 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2630 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2631 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2632 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2633 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2634 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2635 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2636 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2637 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2638 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2639 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2640 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2641 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2642 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2643 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2644 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2645 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2646 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2647 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2648 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2649 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2650 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2651 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2652 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2653 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2654 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2655 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2656 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2657 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2658 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2659 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2660 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2661 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2662 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2663 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2664 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2665 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2666 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2667 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2668 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2669 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2670 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2671 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2672 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2673 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2674 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2675 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2676 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2677 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2678 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2679 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2680 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2681 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2682 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2683 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2684 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2685 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2686 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2687 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2688 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2689 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2690 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2691 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2692 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2693 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2694 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2695 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2696 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2697 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2698 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2699 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2700 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2701 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2702 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2703 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2704 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2705 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2706 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2707 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2708 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2709 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2710 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2711 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2712 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2713 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2714 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2715 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2716 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2717 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2718 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2719 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2720 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2721 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2722 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2723 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2724 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2725 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2726 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2727 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2728 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2729 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2730 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2731 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2732 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2733 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2734 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2735 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2736 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2737 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2738 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2739 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2740 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2741 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2742 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2743 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2744 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2745 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2746 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2747 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2748 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2749 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2750 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2751 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2752 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2753 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2754 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2755 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2756 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2757 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2758 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2759 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2760 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2761 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2762 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2763 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2764 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2765 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2766 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2767 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2768 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2769 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2770 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2771 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2772 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2773 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2774 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2775 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2776 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2777 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2778 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2779 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2780 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2781 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2782 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2783 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2784 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2785 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2786 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2787 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2788 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2789 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2790 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2791 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2792 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2793 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2794 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2795 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2796 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2797 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2798 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2799 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2800 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2801 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2802 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2803 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2804 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2805 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2806 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2807 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2808 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2809 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2810 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2811 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2812 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2813 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2814 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2815 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2816 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2817 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2818 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2819 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2820 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2821 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2822 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2823 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2824 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2825 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2826 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2827 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2828 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2829 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2830 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2831 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2832 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2833 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2834 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2835 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2836 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2837 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2838 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2839 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2840 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2841 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2842 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2843 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2844 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2845 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2846 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2847 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2848 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2849 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2850 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2851 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2852 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2853 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2854 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2855 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2856 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2857 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2858 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2859 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2860 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2861 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2862 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2863 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2864 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2865 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2866 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2867 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2868 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2869 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2870 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2871 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2872 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2873 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2874 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2875 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2876 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2877 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2878 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2879 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2880 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2881 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2882 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2883 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2884 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2885 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2886 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2887 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2888 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2889 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2890 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2891 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2892 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2893 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2894 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2895 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2896 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2897 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2898 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2899 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2900 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2901 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2902 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2903 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2904 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2905 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2906 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2907 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2908 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2909 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2910 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2911 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2912 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2913 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2914 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2915 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2916 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2917 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2918 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2919 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2920 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2921 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2922 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2923 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2924 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2925 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2926 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2927 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2928 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2929 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2930 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2931 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2932 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2933 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2934 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2935 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2936 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2937 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2938 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2939 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2940 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2941 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2942 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2943 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2944 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2945 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2946 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2947 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2948 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2949 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2950 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2951 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2952 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2953 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2954 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2955 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2956 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2957 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2958 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2959 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2960 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2961 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2962 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2963 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2964 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			2965 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2966 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2967 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2968 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2969 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2970 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2971 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2972 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2973 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2974 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2975 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2976 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2977 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2978 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2979 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2980 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2981 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2982 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2983 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2984 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2985 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2986 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2987 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2988 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2989 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2990 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2991 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2992 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2993 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2994 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2995 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2996 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2997 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2998 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2999 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
