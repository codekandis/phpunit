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
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2001 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2002 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2003 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2004 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2005 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2006 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2007 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2008 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2009 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2010 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2011 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2012 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2013 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2014 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2015 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2016 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2017 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2018 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2019 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2020 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2021 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2022 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2023 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2024 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2025 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2026 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2027 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2028 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2029 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2030 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2031 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2032 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2033 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2034 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2035 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2036 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2037 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2038 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2039 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2040 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2041 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2042 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2043 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2044 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2045 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2046 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2047 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2048 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2049 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2050 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2051 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2052 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2053 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2054 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2055 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2056 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2057 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2058 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2059 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2060 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2061 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2062 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2063 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2064 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2065 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2066 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2067 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2068 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2069 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2070 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2071 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2072 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2073 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2074 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2075 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2076 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2077 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2078 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2079 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2080 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2081 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2082 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2083 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2084 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2085 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2086 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2087 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2088 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2089 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2090 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2091 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2092 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2093 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2094 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2095 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2096 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2097 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2098 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2099 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2100 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2101 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2102 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2103 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2104 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2105 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2106 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2107 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2108 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2109 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2110 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2111 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2112 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2113 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2114 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2115 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2116 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2117 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2118 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2119 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2120 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2121 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2122 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2123 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2124 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2125 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2126 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2127 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2128 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2129 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2130 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2131 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2132 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2133 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2134 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2135 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2136 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2137 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2138 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2139 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2140 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2141 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2142 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2143 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2144 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2145 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2146 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2147 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2148 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2149 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2150 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2151 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2152 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2153 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2154 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2155 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2156 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2157 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2158 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2159 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2160 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2161 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2162 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2163 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2164 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2165 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2166 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2167 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2168 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2169 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2170 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2171 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2172 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2173 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2174 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2175 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2176 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2177 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2178 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2179 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2180 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2181 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2182 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2183 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2184 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2185 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2186 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2187 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2188 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2189 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2190 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2191 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2192 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2193 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2194 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2195 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2196 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2197 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2198 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2199 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2200 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2201 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2202 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2203 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2204 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2205 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2206 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2207 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2208 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2209 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2210 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2211 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2212 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2213 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2214 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2215 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2216 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2217 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2218 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2219 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2220 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2221 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2222 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2223 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2224 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2225 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2226 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2227 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2228 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2229 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2230 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2231 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2232 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2233 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2234 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2235 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2236 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2237 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2238 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2239 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2240 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2241 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2242 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2243 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2244 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2245 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2246 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2247 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2248 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2249 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2250 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2251 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2252 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2253 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2254 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2255 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_0,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2256 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2257 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2258 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2259 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2260 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2261 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2262 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2263 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2264 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2265 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2266 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2267 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2268 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2269 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2270 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2271 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2272 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2273 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2274 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2275 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2276 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2277 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2278 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2279 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2280 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2281 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2282 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2283 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2284 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2285 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2286 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2287 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2288 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2289 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2290 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2291 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2292 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2293 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2294 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2295 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2296 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2297 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2298 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2299 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2300 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2301 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2302 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_1,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2303 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2304 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2305 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2306 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2307 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2308 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2309 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2310 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2311 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2312 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2313 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2314 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2315 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2316 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2317 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2318 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2319 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2320 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2321 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2322 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2323 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2324 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2325 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2326 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2327 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2328 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2329 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2330 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2331 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2332 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2333 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2334 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2335 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2336 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2337 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2338 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2339 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2340 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2341 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2342 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2343 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2344 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2345 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2346 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2347 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2348 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2349 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_2,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2350 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2351 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2352 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2353 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2354 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2355 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2356 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2357 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2358 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2359 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2360 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2361 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2362 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2363 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2364 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2365 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2366 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2367 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2368 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2369 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2370 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2371 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2372 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2373 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2374 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2375 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2376 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2377 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2378 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2379 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2380 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2381 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2382 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2383 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2384 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2385 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2386 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2387 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2388 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2389 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2390 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2391 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2392 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2393 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2394 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2395 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2396 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_3,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2397 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2398 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2399 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2400 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2401 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2402 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2403 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2404 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2405 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2406 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2407 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2408 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2409 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2410 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2411 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2412 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2413 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2414 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2415 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2416 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2417 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2418 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2419 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2420 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2421 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2422 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2423 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2424 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2425 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2426 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2427 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2428 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2429 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2430 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2431 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2432 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2433 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2434 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2435 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2436 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2437 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2438 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2439 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2440 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2441 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2442 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2443 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_4,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2444 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2445 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2446 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2447 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2448 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2449 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2450 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2451 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2452 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2453 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2454 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2455 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2456 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2457 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2458 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2459 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2460 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2461 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2462 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2463 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2464 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2465 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2466 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2467 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2468 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2469 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2470 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2471 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2472 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2473 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2474 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2475 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2476 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2477 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2478 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2479 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2480 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2481 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2482 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2483 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2484 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2485 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2486 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2487 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2488 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2489 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2490 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_5,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2491 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2492 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2493 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2494 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2495 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2496 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2497 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2498 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2499 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2500 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2501 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2502 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2503 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2504 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2505 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2506 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2507 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2508 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2509 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2510 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2511 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2512 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2513 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2514 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2515 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2516 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2517 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2518 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2519 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2520 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2521 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2522 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2523 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2524 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2525 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2526 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2527 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2528 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2529 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2530 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2531 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2532 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2533 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2534 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2535 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2536 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2537 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_6,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2538 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2539 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2540 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2541 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2542 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2543 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2544 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2545 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2546 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2547 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2548 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2549 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2550 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2551 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2552 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2553 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2554 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2555 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2556 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2557 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2558 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2559 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2560 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2561 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2562 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2563 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2564 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2565 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2566 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2567 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2568 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2569 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2570 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2571 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2572 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2573 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2574 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2575 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2576 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2577 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2578 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2579 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2580 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2581 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2582 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2583 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2584 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_7,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2585 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2586 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2587 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2588 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2589 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2590 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2591 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2592 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2593 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2594 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2595 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2596 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2597 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2598 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2599 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2600 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2601 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2602 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2603 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2604 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2605 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2606 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2607 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2608 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2609 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2610 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2611 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2612 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2613 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2614 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2615 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2616 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2617 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2618 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2619 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2620 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2621 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2622 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2623 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2624 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2625 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2626 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2627 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2628 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2629 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2630 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2631 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_8,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2632 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2633 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2634 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2635 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2636 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2637 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2638 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2639 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2640 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2641 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2642 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2643 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2644 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2645 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2646 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2647 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2648 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2649 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2650 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2651 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2652 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2653 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2654 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2655 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2656 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2657 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2658 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2659 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2660 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2661 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2662 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2663 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2664 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2665 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2666 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2667 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2668 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2669 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2670 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2671 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2672 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2673 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2674 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2675 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2676 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2677 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2678 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_9,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2679 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2680 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2681 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2682 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2683 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2684 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2685 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2686 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2687 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2688 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2689 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2690 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2691 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2692 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2693 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2694 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2695 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2696 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2697 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2698 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2699 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2700 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2701 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2702 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2703 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2704 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2705 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2706 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2707 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2708 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2709 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2710 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2711 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2712 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2713 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2714 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2715 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2716 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2717 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2718 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2719 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2720 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2721 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2722 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2723 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2724 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2725 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_10,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2726 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2727 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2728 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2729 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2730 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2731 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2732 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2733 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2734 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2735 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2736 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2737 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2738 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2739 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2740 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2741 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2742 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2743 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2744 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2745 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2746 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2747 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2748 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2749 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2750 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2751 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2752 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2753 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2754 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2755 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2756 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2757 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2758 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2759 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2760 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2761 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2762 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2763 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2764 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2765 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2766 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2767 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2768 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2769 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2770 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2771 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2772 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_11,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2773 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2774 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2775 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2776 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2777 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2778 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2779 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2780 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2781 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2782 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2783 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2784 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2785 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2786 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2787 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2788 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2789 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2790 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2791 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2792 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2793 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2794 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2795 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2796 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2797 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2798 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2799 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2800 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2801 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2802 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2803 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2804 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2805 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2806 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2807 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2808 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2809 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2810 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2811 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2812 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2813 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2814 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2815 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2816 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2817 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2818 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2819 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_0,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2820 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2821 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2822 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2823 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2824 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2825 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2826 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2827 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2828 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2829 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2830 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2831 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2832 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2833 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2834 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2835 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2836 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2837 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2838 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2839 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2840 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2841 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2842 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2843 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2844 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2845 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2846 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2847 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2848 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2849 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2850 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2851 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2852 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2853 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2854 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2855 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2856 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2857 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2858 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2859 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2860 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2861 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2862 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2863 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2864 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2865 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2866 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_1,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2867 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2868 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2869 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2870 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2871 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2872 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2873 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2874 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2875 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2876 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2877 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2878 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2879 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2880 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2881 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2882 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2883 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2884 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2885 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2886 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2887 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2888 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2889 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2890 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2891 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2892 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2893 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2894 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2895 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2896 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2897 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2898 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2899 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2900 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2901 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2902 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2903 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2904 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2905 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2906 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2907 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2908 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2909 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2910 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2911 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2912 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2913 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_2,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2914 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2915 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2916 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2917 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2918 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2919 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2920 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2921 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2922 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2923 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2924 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2925 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2926 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2927 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2928 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2929 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2930 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2931 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2932 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2933 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2934 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2935 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2936 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2937 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2938 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2939 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2940 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2941 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2942 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2943 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2944 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2945 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2946 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2947 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2948 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2949 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2950 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2951 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2952 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2953 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2954 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2955 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2956 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2957 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2958 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2959 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2960 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_3,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2961 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2962 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2963 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2964 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2965 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2966 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2967 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2968 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2969 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2970 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2971 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2972 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2973 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2974 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2975 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2976 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2977 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			2978 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2979 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2980 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2981 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2982 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2983 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2984 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2985 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2986 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2987 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2988 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2989 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2990 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2991 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2992 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2993 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2994 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2995 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2996 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2997 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2998 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			2999 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
