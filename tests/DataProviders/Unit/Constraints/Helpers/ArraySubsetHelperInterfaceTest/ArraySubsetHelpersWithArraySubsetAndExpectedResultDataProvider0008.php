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
final readonly class ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0008 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			8000 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8001 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8002 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8003 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8004 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8005 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8006 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8007 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8008 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8009 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8010 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8011 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8012 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8013 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8014 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8015 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8016 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8017 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8018 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8019 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8020 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8021 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8022 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8023 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8024 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8025 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8026 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8027 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8028 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8029 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8030 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8031 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8032 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8033 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8034 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8035 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8036 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8037 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8038 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8039 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8040 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8041 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8042 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8043 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8044 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8045 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8046 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8047 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8048 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8049 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8050 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8051 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8052 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8053 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8054 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8055 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8056 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8057 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8058 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8059 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8060 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8061 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8062 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8063 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8064 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8065 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8066 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8067 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8068 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8069 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8070 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8071 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8072 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8073 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8074 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8075 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8076 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8077 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8078 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8079 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8080 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8081 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8082 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8083 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_12,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8084 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8085 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8086 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8087 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8088 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8089 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8090 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8091 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8092 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8093 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8094 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8095 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8096 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8097 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8098 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8099 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8100 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8101 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8102 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8103 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8104 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8105 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8106 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8107 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8108 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8109 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8110 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8111 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8112 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8113 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8114 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8115 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8116 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8117 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8118 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8119 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8120 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8121 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8122 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8123 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8124 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8125 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8126 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8127 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8128 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8129 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8130 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_13,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8131 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8132 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8133 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8134 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8135 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8136 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8137 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8138 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8139 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8140 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8141 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8142 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8143 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8144 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8145 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8146 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8147 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8148 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8149 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8150 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8151 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8152 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8153 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8154 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8155 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8156 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8157 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8158 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8159 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8160 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8161 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8162 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8163 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8164 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8165 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8166 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8167 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8168 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8169 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8170 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8171 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8172 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8173 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8174 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8175 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8176 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8177 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_18,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8178 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8179 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8180 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8181 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8182 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8183 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8184 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8185 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8186 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8187 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8188 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8189 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8190 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8191 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8192 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8193 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8194 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8195 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8196 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8197 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8198 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8199 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8200 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8201 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8202 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8203 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8204 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8205 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8206 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8207 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8208 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8209 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8210 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8211 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8212 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8213 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8214 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8215 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8216 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8217 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8218 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8219 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8220 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8221 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8222 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8223 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8224 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_19,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8225 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8226 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8227 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8228 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8229 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8230 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8231 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8232 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8233 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8234 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8235 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8236 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8237 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8238 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8239 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8240 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8241 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8242 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8243 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8244 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8245 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8246 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8247 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8248 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8249 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8250 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8251 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8252 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8253 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8254 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8255 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8256 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8257 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8258 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8259 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8260 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8261 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8262 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8263 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8264 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8265 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8266 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8267 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8268 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8269 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8270 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8271 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_20,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8272 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8273 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8274 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8275 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8276 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8277 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8278 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8279 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8280 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8281 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8282 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8283 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8284 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8285 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8286 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8287 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8288 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8289 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8290 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8291 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8292 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8293 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8294 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8295 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8296 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8297 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8298 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8299 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8300 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8301 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8302 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8303 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8304 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8305 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8306 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8307 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8308 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8309 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8310 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8311 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8312 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8313 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8314 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8315 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8316 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8317 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8318 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_14(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8319 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8320 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8321 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8322 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8323 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8324 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8325 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8326 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8327 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8328 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8329 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8330 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8331 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8332 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8333 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8334 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8335 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8336 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8337 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8338 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8339 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8340 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8341 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8342 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8343 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8344 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8345 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8346 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8347 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8348 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8349 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8350 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8351 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8352 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8353 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8354 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8355 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8356 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8357 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8358 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8359 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8360 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8361 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8362 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8363 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8364 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8365 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_15(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8366 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8367 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8368 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8369 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8370 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8371 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8372 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8373 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8374 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8375 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8376 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8377 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8378 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8379 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8380 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8381 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8382 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8383 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8384 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8385 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8386 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8387 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8388 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8389 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8390 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8391 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8392 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8393 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8394 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8395 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8396 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8397 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8398 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8399 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8400 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8401 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8402 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8403 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8404 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8405 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8406 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8407 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8408 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8409 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8410 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8411 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8412 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_21(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8413 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8414 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8415 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8416 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8417 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8418 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8419 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8420 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8421 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8422 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8423 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8424 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8425 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8426 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8427 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8428 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8429 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8430 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8431 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8432 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8433 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8434 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8435 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8436 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8437 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8438 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8439 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8440 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8441 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8442 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8443 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8444 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8445 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8446 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8447 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8448 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8449 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8450 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8451 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8452 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8453 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8454 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8455 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8456 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8457 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8458 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8459 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8460 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8461 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8462 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8463 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8464 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8465 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8466 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8467 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8468 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8469 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8470 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8471 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8472 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8473 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8474 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8475 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8476 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8477 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8478 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8479 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8480 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8481 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8482 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8483 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8484 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8485 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8486 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8487 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8488 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8489 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8490 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8491 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8492 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8493 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8494 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8495 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8496 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8497 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8498 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8499 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8500 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8501 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8502 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8503 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8504 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8505 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8506 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8507 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8508 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8509 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8510 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8511 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8512 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8513 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8514 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8515 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8516 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8517 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8518 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8519 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8520 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8521 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8522 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8523 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8524 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8525 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8526 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8527 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8528 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8529 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8530 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8531 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8532 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8533 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8534 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8535 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8536 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8537 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8538 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8539 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8540 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8541 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8542 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8543 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8544 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8545 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8546 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8547 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8548 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8549 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8550 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8551 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8552 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8553 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8554 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8555 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8556 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8557 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8558 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8559 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8560 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8561 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8562 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8563 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8564 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8565 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8566 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8567 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8568 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8569 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8570 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8571 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8572 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8573 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8574 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8575 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8576 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8577 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8578 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8579 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8580 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8581 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8582 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8583 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8584 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8585 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8586 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8587 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8588 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8589 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8590 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8591 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8592 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8593 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8594 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8595 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8596 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8597 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8598 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8599 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8600 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8601 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8602 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8603 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8604 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8605 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8606 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8607 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8608 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8609 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8610 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8611 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8612 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8613 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8614 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8615 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8616 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8617 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8618 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8619 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8620 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8621 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8622 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8623 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8624 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8625 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8626 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8627 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8628 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8629 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8630 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8631 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8632 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8633 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8634 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8635 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8636 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8637 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8638 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8639 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8640 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8641 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8642 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8643 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8644 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8645 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8646 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8647 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8648 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8649 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8650 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8651 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8652 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8653 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8654 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8655 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8656 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8657 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8658 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8659 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8660 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8661 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8662 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8663 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8664 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8665 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8666 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8667 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8668 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8669 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8670 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8671 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8672 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8673 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8674 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8675 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8676 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8677 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8678 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8679 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8680 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8681 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8682 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8683 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8684 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8685 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8686 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8687 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8688 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8689 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8690 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8691 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8692 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8693 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8694 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8695 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8696 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8697 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8698 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8699 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8700 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8701 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8702 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8703 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8704 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8705 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8706 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8707 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8708 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8709 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8710 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8711 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8712 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8713 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8714 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8715 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8716 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8717 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8718 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8719 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8720 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8721 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8722 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8723 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8724 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8725 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8726 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8727 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8728 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8729 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8730 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8731 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8732 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8733 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8734 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8735 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8736 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8737 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8738 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8739 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8740 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8741 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8742 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8743 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8744 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8745 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8746 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8747 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8748 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8749 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8750 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8751 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8752 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8753 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8754 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8755 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8756 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8757 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8758 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8759 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8760 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8761 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8762 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8763 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8764 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8765 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8766 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8767 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8768 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8769 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8770 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8771 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8772 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8773 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8774 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8775 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8776 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8777 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8778 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8779 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8780 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8781 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8782 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8783 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8784 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8785 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8786 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8787 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8788 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8789 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8790 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8791 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8792 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8793 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8794 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8795 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8796 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8797 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8798 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8799 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8800 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8801 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			8802 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8803 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8804 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8805 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8806 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8807 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8808 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8809 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8810 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8811 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8812 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8813 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8814 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8815 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8816 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8817 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8818 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8819 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8820 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8821 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8822 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8823 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8824 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8825 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8826 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8827 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8828 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8829 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8830 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8831 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8832 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8833 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8834 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			8835 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
