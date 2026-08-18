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
final readonly class ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0006 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			6000 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6001 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6002 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6003 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6004 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6005 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6006 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6007 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6008 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6009 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6010 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6011 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6012 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6013 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6014 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6015 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6016 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6017 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6018 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6019 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6020 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6021 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6022 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6023 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6024 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6025 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6026 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6027 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6028 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6029 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6030 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6031 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6032 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6033 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6034 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6035 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6036 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6037 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6038 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6039 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6040 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6041 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6042 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6043 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6044 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6045 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6046 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6047 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6048 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6049 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6050 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6051 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6052 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6053 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6054 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6055 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6056 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6057 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6058 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6059 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6060 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6061 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6062 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6063 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6064 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6065 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6066 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6067 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6068 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6069 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6070 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6071 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6072 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6073 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6074 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6075 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6076 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6077 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6078 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6079 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6080 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6081 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6082 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6083 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6084 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6085 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6086 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6087 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6088 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6089 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6090 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6091 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6092 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6093 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6094 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6095 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6096 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6097 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6098 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6099 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6100 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6101 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6102 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6103 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6104 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6105 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6106 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6107 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6108 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6109 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6110 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6111 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6112 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6113 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6114 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6115 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6116 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6117 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6118 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6119 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6120 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6121 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6122 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6123 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6124 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6125 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6126 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6127 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6128 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6129 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6130 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6131 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6132 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6133 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6134 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6135 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6136 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6137 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6138 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6139 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6140 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6141 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6142 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6143 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6144 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6145 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6146 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6147 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6148 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6149 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6150 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6151 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6152 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6153 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6154 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6155 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6156 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6157 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6158 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6159 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6160 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6161 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6162 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6163 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6164 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6165 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6166 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6167 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6168 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6169 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6170 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6171 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6172 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6173 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6174 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6175 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6176 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6177 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6178 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6179 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6180 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6181 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6182 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6183 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6184 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6185 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6186 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6187 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6188 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6189 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6190 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6191 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6192 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6193 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6194 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6195 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6196 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6197 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6198 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6199 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6200 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6201 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6202 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6203 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6204 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6205 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6206 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6207 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6208 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6209 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6210 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6211 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6212 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6213 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6214 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6215 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6216 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6217 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6218 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6219 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6220 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6221 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6222 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6223 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6224 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6225 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6226 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6227 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6228 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6229 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6230 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6231 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6232 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6233 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6234 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6235 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6236 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6237 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6238 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6239 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6240 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6241 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6242 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6243 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6244 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6245 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6246 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6247 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6248 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6249 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6250 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6251 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6252 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6253 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6254 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6255 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6256 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6257 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6258 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6259 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6260 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6261 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6262 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6263 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6264 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6265 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6266 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6267 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6268 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6269 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6270 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6271 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6272 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6273 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6274 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6275 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6276 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6277 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6278 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6279 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6280 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6281 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6282 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6283 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6284 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6285 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6286 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6287 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6288 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6289 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6290 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6291 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6292 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6293 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6294 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6295 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6296 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6297 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6298 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6299 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6300 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6301 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6302 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6303 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6304 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6305 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6306 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6307 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6308 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6309 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6310 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6311 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6312 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6313 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6314 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6315 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6316 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6317 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6318 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6319 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6320 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6321 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6322 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6323 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6324 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6325 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6326 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6327 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6328 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6329 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6330 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6331 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6332 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6333 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6334 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6335 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6336 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6337 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6338 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6339 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6340 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6341 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6342 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6343 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6344 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6345 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6346 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6347 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6348 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6349 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6350 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6351 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6352 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6353 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6354 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6355 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6356 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6357 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6358 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6359 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6360 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6361 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6362 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6363 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6364 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6365 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6366 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6367 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6368 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6369 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6370 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6371 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6372 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6373 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6374 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6375 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6376 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6377 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6378 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6379 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6380 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6381 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6382 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6383 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6384 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6385 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6386 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6387 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6388 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6389 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6390 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6391 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6392 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6393 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6394 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6395 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6396 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6397 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6398 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6399 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6400 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6401 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6402 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6403 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6404 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6405 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6406 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6407 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6408 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6409 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6410 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6411 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6412 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6413 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6414 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6415 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6416 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6417 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6418 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6419 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6420 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6421 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6422 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6423 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6424 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6425 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6426 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6427 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6428 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6429 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6430 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6431 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6432 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6433 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6434 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6435 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6436 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6437 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6438 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6439 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6440 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6441 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6442 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6443 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6444 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6445 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6446 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6447 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6448 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6449 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6450 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6451 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6452 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6453 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6454 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6455 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6456 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6457 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6458 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6459 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6460 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6461 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6462 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6463 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6464 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6465 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6466 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6467 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6468 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6469 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6470 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6471 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6472 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6473 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6474 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6475 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6476 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6477 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6478 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6479 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6480 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6481 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6482 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6483 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6484 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6485 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6486 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6487 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6488 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6489 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6490 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6491 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6492 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6493 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6494 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6495 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6496 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6497 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6498 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6499 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6500 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6501 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6502 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6503 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6504 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6505 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6506 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6507 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6508 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6509 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6510 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6511 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6512 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6513 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6514 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6515 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6516 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6517 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6518 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6519 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6520 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6521 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6522 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6523 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6524 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6525 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6526 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6527 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6528 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6529 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6530 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6531 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6532 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6533 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6534 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6535 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6536 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6537 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6538 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6539 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6540 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6541 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6542 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6543 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6544 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6545 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6546 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6547 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6548 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6549 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6550 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6551 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6552 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6553 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6554 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6555 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6556 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6557 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6558 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6559 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6560 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6561 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6562 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6563 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6564 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6565 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6566 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6567 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6568 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6569 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6570 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6571 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6572 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6573 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6574 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6575 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6576 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6577 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6578 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6579 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6580 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6581 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6582 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6583 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6584 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6585 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6586 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6587 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6588 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6589 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6590 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6591 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6592 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6593 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6594 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6595 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6596 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6597 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6598 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6599 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6600 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6601 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6602 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6603 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6604 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6605 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6606 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6607 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6608 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6609 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6610 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6611 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6612 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6613 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6614 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6615 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6616 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6617 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6618 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6619 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6620 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6621 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6622 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6623 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6624 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6625 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6626 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6627 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6628 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6629 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6630 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6631 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6632 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6633 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6634 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6635 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6636 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6637 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6638 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6639 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6640 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6641 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6642 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6643 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6644 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6645 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6646 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6647 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6648 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6649 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6650 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6651 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6652 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6653 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6654 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6655 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6656 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6657 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6658 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6659 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6660 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6661 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6662 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6663 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6664 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6665 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6666 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6667 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6668 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6669 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6670 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6671 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6672 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6673 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6674 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6675 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6676 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6677 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6678 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6679 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6680 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6681 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6682 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6683 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6684 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6685 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6686 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6687 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6688 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6689 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6690 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6691 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6692 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6693 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6694 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6695 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6696 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6697 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6698 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6699 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6700 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6701 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6702 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6703 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6704 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6705 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6706 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6707 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6708 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6709 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6710 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6711 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6712 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6713 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6714 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6715 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6716 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6717 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6718 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6719 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6720 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6721 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6722 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6723 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6724 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6725 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6726 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6727 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6728 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6729 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6730 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6731 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6732 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6733 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6734 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6735 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6736 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6737 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6738 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6739 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6740 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6741 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6742 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6743 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6744 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6745 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6746 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6747 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6748 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6749 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6750 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6751 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6752 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6753 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6754 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6755 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6756 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6757 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6758 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6759 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6760 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6761 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6762 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6763 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6764 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6765 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6766 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6767 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6768 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6769 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6770 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6771 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6772 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6773 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6774 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6775 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6776 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6777 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6778 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6779 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6780 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6781 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6782 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6783 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6784 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6785 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6786 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6787 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6788 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6789 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6790 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6791 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6792 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6793 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6794 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6795 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6796 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6797 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6798 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6799 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6800 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6801 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6802 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6803 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6804 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6805 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6806 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6807 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6808 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6809 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6810 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6811 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6812 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6813 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6814 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6815 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6816 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6817 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6818 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6819 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6820 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6821 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6822 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6823 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6824 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6825 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6826 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6827 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6828 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6829 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6830 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6831 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6832 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6833 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6834 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6835 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6836 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6837 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6838 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6839 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6840 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6841 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6842 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6843 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6844 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6845 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6846 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6847 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6848 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6849 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6850 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6851 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6852 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6853 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6854 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6855 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6856 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6857 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6858 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6859 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6860 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6861 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6862 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6863 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6864 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6865 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6866 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6867 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6868 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6869 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6870 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6871 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6872 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6873 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6874 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6875 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6876 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6877 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6878 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6879 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6880 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6881 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6882 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6883 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6884 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6885 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6886 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6887 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6888 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6889 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6890 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6891 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6892 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6893 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6894 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6895 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6896 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6897 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6898 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6899 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6900 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6901 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6902 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6903 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6904 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6905 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6906 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6907 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6908 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6909 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6910 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6911 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6912 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6913 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6914 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6915 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6916 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6917 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6918 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6919 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6920 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6921 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6922 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6923 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6924 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6925 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6926 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6927 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6928 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6929 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6930 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6931 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6932 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6933 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6934 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6935 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6936 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6937 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6938 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6939 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6940 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6941 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6942 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6943 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6944 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6945 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6946 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6947 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6948 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6949 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6950 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6951 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6952 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6953 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6954 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6955 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6956 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6957 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6958 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6959 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6960 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6961 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6962 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6963 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6964 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6965 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6966 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6967 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6968 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6969 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6970 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6971 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6972 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6973 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6974 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6975 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6976 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6977 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6978 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6979 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6980 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6981 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			6982 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6983 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6984 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6985 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6986 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6987 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6988 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6989 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6990 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6991 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6992 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6993 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6994 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6995 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6996 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6997 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6998 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			6999 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
