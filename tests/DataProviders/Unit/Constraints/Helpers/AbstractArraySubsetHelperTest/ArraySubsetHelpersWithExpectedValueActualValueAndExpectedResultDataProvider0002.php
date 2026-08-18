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
final readonly class ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider0002 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			2000 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2001 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2002 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2003 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2004 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2005 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2006 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2007 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2008 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2009 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2010 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2011 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2012 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2013 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2014 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2015 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2016 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2017 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2018 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2019 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2020 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2021 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2022 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2023 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2024 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2025 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2026 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2027 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2028 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2029 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2030 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2031 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2032 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2033 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2034 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2035 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2036 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2037 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2038 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2039 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2040 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2041 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2042 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2043 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2044 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2045 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2046 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2047 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2048 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2049 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2050 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2051 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2052 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2053 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2054 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2055 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2056 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2057 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2058 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2059 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2060 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2061 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2062 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2063 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2064 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2065 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2066 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2067 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2068 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2069 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2070 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2071 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2072 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2073 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2074 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2075 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2076 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2077 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2078 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2079 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2080 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2081 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2082 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2083 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2084 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2085 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2086 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2087 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2088 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2089 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2090 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2091 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2092 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2093 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2094 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2095 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2096 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2097 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2098 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2099 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2100 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2101 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2102 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2103 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2104 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2105 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2106 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2107 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2108 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2109 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2110 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2111 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2112 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2113 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2114 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2115 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2116 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2117 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2118 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2119 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2120 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2121 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2122 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2123 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2124 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2125 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2126 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2127 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2128 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2129 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2130 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2131 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2132 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2133 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2134 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2135 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2136 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2137 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2138 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2139 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2140 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2141 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2142 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2143 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2144 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2145 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2146 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2147 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2148 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2149 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2150 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2151 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2152 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2153 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2154 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2155 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2156 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2157 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2158 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2159 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2160 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2161 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2162 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2163 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2164 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2165 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2166 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2167 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2168 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2169 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2170 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2171 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2172 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2173 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2174 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2175 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2176 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2177 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2178 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2179 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2180 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2181 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2182 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2183 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2184 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2185 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2186 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2187 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2188 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2189 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2190 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2191 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2192 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2193 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2194 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2195 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2196 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2197 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2198 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2199 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2200 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2201 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2202 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2203 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2204 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2205 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2206 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2207 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2208 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2209 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2210 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2211 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2212 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2213 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2214 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2215 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2216 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2217 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2218 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2219 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2220 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2221 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2222 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2223 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2224 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2225 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2226 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2227 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2228 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2229 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2230 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2231 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2232 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2233 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2234 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2235 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2236 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2237 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2238 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2239 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2240 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2241 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2242 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2243 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2244 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2245 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2246 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2247 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2248 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2249 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2250 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2251 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2252 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2253 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2254 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2255 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2256 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2257 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2258 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2259 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2260 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2261 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2262 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2263 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2264 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2265 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2266 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2267 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2268 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2269 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2270 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2271 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2272 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2273 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2274 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2275 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2276 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2277 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2278 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2279 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2280 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2281 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2282 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2283 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2284 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2285 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2286 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2287 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2288 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2289 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2290 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2291 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2292 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2293 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2294 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2295 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2296 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2297 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2298 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2299 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2300 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2301 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2302 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2303 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2304 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2305 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2306 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2307 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2308 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2309 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2310 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2311 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2312 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2313 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2314 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2315 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2316 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2317 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2318 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2319 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2320 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2321 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2322 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2323 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2324 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2325 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2326 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2327 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2328 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2329 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2330 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2331 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2332 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2333 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2334 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2335 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2336 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2337 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2338 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2339 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2340 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2341 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2342 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2343 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2344 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2345 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2346 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2347 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2348 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2349 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2350 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2351 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2352 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2353 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2354 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2355 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2356 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2357 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2358 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2359 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2360 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2361 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2362 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2363 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2364 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2365 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2366 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2367 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2368 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2369 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2370 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2371 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2372 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2373 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2374 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2375 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2376 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2377 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2378 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2379 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2380 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2381 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2382 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2383 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2384 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2385 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2386 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2387 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2388 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2389 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2390 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2391 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2392 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2393 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2394 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2395 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2396 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2397 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2398 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2399 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2400 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2401 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2402 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2403 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2404 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2405 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2406 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2407 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2408 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2409 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2410 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2411 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2412 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2413 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2414 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2415 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2416 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2417 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2418 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2419 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2420 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2421 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2422 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2423 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2424 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2425 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2426 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2427 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2428 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2429 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2430 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2431 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2432 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2433 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2434 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2435 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2436 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2437 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2438 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2439 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2440 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2441 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2442 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2443 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2444 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2445 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2446 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2447 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2448 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2449 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			]
		];
	}
}
