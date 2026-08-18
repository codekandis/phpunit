<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\Helpers\ArraySubsetHelperInterfaceTest;

use CodeKandis\PhpUnit\Constraints\Helpers\UnkeyedArraySubsetHelper;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0005 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			5000 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5001 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5002 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5003 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5004 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5005 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5006 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5007 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5008 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5009 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5010 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5011 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5012 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5013 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5014 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5015 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5016 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5017 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5018 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5019 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5020 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5021 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5022 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5023 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5024 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5025 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5026 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5027 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5028 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5029 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5030 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5031 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5032 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5033 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5034 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5035 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5036 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5037 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5038 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5039 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5040 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5041 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5042 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5043 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5044 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5045 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5046 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5047 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5048 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5049 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5050 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5051 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5052 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5053 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5054 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5055 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5056 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5057 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5058 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5059 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5060 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5061 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5062 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5063 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5064 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5065 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5066 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5067 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5068 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5069 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5070 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5071 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5072 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5073 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5074 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5075 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5076 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5077 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5078 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5079 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5080 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5081 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5082 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5083 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5084 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5085 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5086 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5087 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5088 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5089 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5090 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5091 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5092 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5093 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5094 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5095 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5096 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5097 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5098 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5099 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5100 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5101 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5102 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5103 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5104 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5105 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5106 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5107 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5108 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5109 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5110 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5111 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5112 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5113 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5114 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5115 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5116 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5117 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5118 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5119 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5120 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5121 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5122 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5123 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5124 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5125 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5126 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5127 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5128 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5129 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5130 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5131 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5132 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5133 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5134 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5135 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5136 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5137 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5138 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5139 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5140 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5141 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5142 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5143 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5144 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5145 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5146 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5147 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5148 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5149 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5150 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5151 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5152 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5153 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5154 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5155 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5156 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5157 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5158 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5159 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5160 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5161 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5162 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5163 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5164 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5165 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5166 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5167 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5168 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5169 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5170 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5171 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5172 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5173 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5174 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5175 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5176 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5177 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5178 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5179 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5180 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5181 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5182 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5183 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5184 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5185 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5186 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5187 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5188 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5189 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5190 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5191 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5192 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5193 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5194 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5195 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5196 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5197 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5198 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5199 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5200 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5201 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5202 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5203 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5204 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5205 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5206 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5207 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5208 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5209 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5210 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5211 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5212 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5213 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5214 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5215 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5216 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5217 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5218 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5219 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5220 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5221 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5222 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5223 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5224 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5225 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5226 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5227 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5228 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5229 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5230 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5231 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5232 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5233 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5234 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5235 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5236 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5237 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5238 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5239 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5240 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5241 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5242 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5243 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5244 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5245 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5246 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5247 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5248 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5249 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5250 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5251 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5252 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5253 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5254 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5255 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5256 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5257 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5258 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5259 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5260 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5261 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5262 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5263 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5264 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5265 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5266 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5267 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5268 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5269 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5270 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5271 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5272 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5273 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5274 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5275 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5276 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5277 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5278 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5279 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5280 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5281 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5282 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5283 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5284 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5285 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5286 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5287 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5288 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5289 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5290 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5291 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5292 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5293 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5294 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5295 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5296 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5297 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5298 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5299 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5300 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5301 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5302 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5303 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5304 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5305 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5306 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5307 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5308 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5309 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5310 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5311 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5312 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5313 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5314 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5315 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5316 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5317 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5318 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5319 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5320 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5321 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5322 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5323 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5324 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5325 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5326 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5327 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5328 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5329 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5330 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5331 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5332 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5333 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5334 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5335 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5336 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5337 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5338 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5339 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5340 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5341 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5342 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5343 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5344 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5345 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5346 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5347 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5348 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5349 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5350 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5351 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5352 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5353 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5354 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5355 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5356 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5357 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5358 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5359 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5360 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5361 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5362 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5363 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5364 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5365 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5366 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5367 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5368 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5369 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5370 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5371 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5372 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5373 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5374 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5375 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5376 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5377 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5378 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5379 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5380 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5381 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5382 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5383 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5384 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5385 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5386 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5387 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5388 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5389 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5390 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5391 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5392 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5393 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5394 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5395 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5396 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5397 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5398 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5399 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5400 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5401 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5402 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5403 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5404 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5405 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5406 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5407 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5408 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5409 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5410 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5411 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5412 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5413 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5414 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5415 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5416 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5417 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5418 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5419 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5420 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5421 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5422 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5423 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5424 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5425 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5426 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5427 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5428 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5429 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5430 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5431 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5432 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5433 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5434 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5435 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5436 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5437 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5438 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5439 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5440 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5441 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5442 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5443 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5444 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5445 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5446 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5447 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5448 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5449 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5450 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5451 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5452 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5453 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5454 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5455 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5456 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5457 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5458 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5459 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5460 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5461 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5462 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5463 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5464 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5465 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5466 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5467 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5468 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5469 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5470 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5471 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5472 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5473 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5474 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5475 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5476 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5477 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5478 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5479 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5480 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5481 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5482 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5483 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5484 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5485 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5486 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5487 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5488 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5489 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5490 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5491 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5492 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5493 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5494 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5495 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5496 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5497 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5498 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5499 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5500 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5501 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5502 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5503 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5504 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5505 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5506 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5507 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5508 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5509 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5510 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5511 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5512 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5513 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5514 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5515 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5516 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5517 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5518 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5519 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5520 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5521 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5522 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5523 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5524 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5525 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5526 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5527 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5528 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5529 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5530 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5531 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5532 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5533 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5534 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5535 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5536 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5537 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5538 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5539 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5540 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5541 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5542 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5543 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5544 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5545 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5546 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5547 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5548 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5549 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5550 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5551 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5552 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5553 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5554 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5555 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5556 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5557 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5558 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5559 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5560 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5561 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5562 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5563 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5564 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5565 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5566 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5567 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5568 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5569 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5570 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5571 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5572 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5573 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5574 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5575 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5576 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5577 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5578 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5579 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5580 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5581 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5582 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5583 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5584 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5585 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5586 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5587 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5588 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5589 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5590 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5591 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5592 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5593 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5594 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5595 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5596 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5597 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5598 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5599 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5600 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5601 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5602 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5603 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5604 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5605 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5606 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5607 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5608 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5609 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5610 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5611 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5612 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5613 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5614 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5615 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5616 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5617 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5618 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5619 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5620 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5621 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5622 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5623 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5624 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5625 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5626 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5627 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5628 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5629 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5630 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5631 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5632 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5633 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5634 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5635 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5636 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5637 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5638 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5639 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5640 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5641 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5642 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5643 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5644 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5645 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5646 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5647 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5648 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5649 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5650 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5651 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5652 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5653 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5654 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5655 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5656 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5657 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5658 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5659 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5660 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5661 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5662 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5663 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5664 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5665 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5666 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5667 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5668 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5669 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5670 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5671 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5672 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5673 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5674 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5675 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5676 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5677 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5678 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5679 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5680 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5681 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5682 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5683 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5684 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5685 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5686 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5687 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5688 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5689 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5690 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5691 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5692 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5693 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5694 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5695 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5696 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5697 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5698 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5699 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5700 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5701 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5702 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5703 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5704 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5705 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5706 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5707 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5708 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5709 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5710 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5711 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5712 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5713 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5714 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5715 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5716 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5717 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5718 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5719 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5720 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5721 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5722 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5723 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5724 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5725 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5726 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5727 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5728 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5729 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5730 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5731 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5732 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5733 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5734 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5735 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5736 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5737 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5738 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5739 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5740 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5741 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5742 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5743 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5744 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5745 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5746 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5747 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5748 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5749 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5750 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5751 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5752 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5753 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5754 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5755 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5756 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5757 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5758 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5759 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5760 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5761 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5762 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5763 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5764 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5765 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5766 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5767 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5768 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5769 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5770 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5771 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5772 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5773 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5774 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5775 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5776 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5777 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5778 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5779 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5780 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5781 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5782 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5783 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5784 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5785 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5786 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5787 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5788 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5789 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5790 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5791 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5792 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5793 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5794 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5795 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5796 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5797 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5798 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5799 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5800 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5801 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5802 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5803 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5804 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5805 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5806 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5807 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5808 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5809 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5810 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5811 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5812 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5813 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5814 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5815 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5816 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5817 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5818 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5819 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5820 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5821 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5822 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5823 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5824 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5825 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5826 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5827 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5828 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5829 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5830 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5831 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5832 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5833 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5834 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5835 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5836 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5837 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5838 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5839 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5840 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5841 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5842 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5843 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5844 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5845 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5846 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5847 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5848 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5849 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5850 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5851 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5852 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5853 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5854 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5855 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5856 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5857 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5858 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5859 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5860 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5861 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5862 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5863 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5864 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5865 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5866 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5867 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5868 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5869 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5870 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5871 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5872 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5873 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5874 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5875 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5876 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5877 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5878 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5879 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5880 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5881 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5882 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5883 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5884 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5885 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5886 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5887 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5888 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5889 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5890 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5891 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5892 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5893 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5894 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5895 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5896 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5897 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5898 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5899 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5900 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5901 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5902 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5903 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5904 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5905 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5906 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5907 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5908 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5909 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5910 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5911 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5912 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5913 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5914 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5915 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5916 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5917 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5918 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5919 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5920 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5921 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5922 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5923 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5924 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5925 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5926 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5927 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5928 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5929 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5930 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5931 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5932 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5933 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5934 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5935 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5936 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5937 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5938 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5939 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5940 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5941 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5942 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5943 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5944 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5945 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5946 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5947 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5948 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5949 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5950 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5951 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5952 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5953 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5954 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5955 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5956 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5957 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5958 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5959 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5960 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5961 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5962 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5963 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5964 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5965 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5966 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5967 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5968 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5969 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5970 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5971 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5972 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5973 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5974 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5975 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5976 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5977 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5978 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5979 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5980 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5981 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5982 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5983 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5984 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5985 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5986 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5987 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5988 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5989 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5990 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5991 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5992 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5993 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5994 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			5995 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5996 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5997 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5998 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			5999 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
