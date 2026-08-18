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
final readonly class ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0007 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			7000 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7001 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7002 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7003 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7004 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7005 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7006 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7007 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7008 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7009 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7010 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7011 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7012 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7013 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7014 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7015 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7016 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7017 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7018 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7019 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7020 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7021 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7022 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7023 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7024 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7025 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7026 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7027 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7028 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7029 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7030 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7031 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7032 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7033 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7034 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7035 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7036 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7037 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7038 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7039 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7040 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7041 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7042 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7043 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7044 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7045 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7046 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7047 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7048 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7049 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7050 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7051 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7052 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7053 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7054 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7055 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7056 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7057 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7058 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7059 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7060 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7061 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7062 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7063 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7064 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7065 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7066 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7067 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7068 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7069 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7070 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7071 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7072 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7073 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7074 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7075 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7076 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7077 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7078 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7079 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7080 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7081 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7082 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7083 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7084 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7085 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7086 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7087 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7088 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7089 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7090 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7091 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7092 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7093 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7094 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7095 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7096 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7097 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7098 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7099 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7100 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7101 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7102 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7103 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7104 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7105 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7106 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7107 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7108 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7109 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7110 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7111 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7112 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7113 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7114 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7115 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7116 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7117 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7118 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7119 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7120 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7121 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7122 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7123 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7124 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7125 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7126 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7127 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7128 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7129 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7130 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7131 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7132 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7133 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7134 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7135 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7136 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7137 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7138 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7139 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7140 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7141 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7142 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7143 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7144 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7145 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7146 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7147 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7148 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7149 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7150 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7151 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7152 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7153 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7154 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7155 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7156 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7157 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7158 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7159 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7160 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7161 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7162 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7163 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7164 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7165 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7166 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7167 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7168 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7169 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7170 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7171 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7172 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7173 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7174 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7175 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7176 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7177 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7178 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7179 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7180 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7181 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7182 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7183 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7184 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7185 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7186 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7187 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7188 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7189 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7190 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7191 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7192 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7193 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7194 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7195 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7196 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7197 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7198 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7199 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7200 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7201 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7202 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7203 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7204 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7205 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7206 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7207 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7208 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7209 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7210 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7211 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7212 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7213 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7214 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7215 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7216 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7217 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7218 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7219 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7220 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7221 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7222 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7223 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7224 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7225 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7226 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7227 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7228 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7229 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7230 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7231 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7232 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7233 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7234 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7235 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7236 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7237 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7238 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7239 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7240 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7241 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7242 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7243 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7244 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7245 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7246 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7247 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7248 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7249 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7250 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7251 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7252 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7253 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7254 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7255 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7256 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7257 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7258 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7259 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7260 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7261 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7262 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7263 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7264 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7265 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7266 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7267 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7268 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7269 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7270 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7271 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7272 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7273 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7274 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7275 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7276 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7277 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7278 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7279 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7280 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7281 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7282 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7283 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7284 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_1,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7285 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7286 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7287 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7288 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7289 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7290 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7291 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7292 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7293 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7294 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7295 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7296 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7297 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7298 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7299 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7300 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7301 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7302 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7303 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7304 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7305 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7306 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7307 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7308 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7309 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7310 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7311 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7312 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7313 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7314 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7315 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7316 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7317 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7318 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7319 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7320 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7321 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7322 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7323 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7324 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7325 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7326 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7327 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7328 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7329 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7330 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7331 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_2,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7332 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7333 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7334 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7335 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7336 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7337 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7338 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7339 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7340 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7341 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7342 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7343 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7344 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7345 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7346 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7347 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7348 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7349 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7350 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7351 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7352 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7353 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7354 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7355 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7356 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7357 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7358 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7359 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7360 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7361 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7362 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7363 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7364 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7365 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7366 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7367 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7368 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7369 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7370 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7371 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7372 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7373 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7374 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7375 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7376 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7377 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7378 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_3,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7379 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7380 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7381 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7382 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7383 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7384 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7385 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7386 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7387 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7388 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7389 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7390 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7391 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7392 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7393 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7394 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7395 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7396 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7397 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7398 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7399 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7400 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7401 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7402 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7403 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7404 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7405 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7406 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7407 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7408 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7409 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7410 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7411 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7412 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7413 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7414 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7415 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7416 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7417 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7418 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7419 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7420 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7421 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7422 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7423 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7424 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7425 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_4,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7426 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7427 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7428 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7429 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7430 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7431 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7432 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7433 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7434 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7435 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7436 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7437 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7438 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7439 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7440 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7441 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7442 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7443 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7444 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7445 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7446 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7447 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7448 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7449 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7450 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7451 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7452 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7453 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7454 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7455 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7456 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7457 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7458 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7459 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7460 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7461 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7462 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7463 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7464 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7465 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7466 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7467 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7468 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7469 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7470 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7471 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7472 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_5,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7473 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7474 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7475 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7476 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7477 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7478 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7479 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7480 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7481 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7482 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7483 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7484 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7485 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7486 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7487 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7488 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7489 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7490 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7491 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7492 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7493 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7494 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7495 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7496 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7497 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7498 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7499 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7500 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7501 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7502 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7503 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7504 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7505 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7506 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7507 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7508 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7509 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7510 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7511 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7512 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7513 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7514 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7515 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7516 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7517 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7518 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7519 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_6,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7520 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7521 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7522 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7523 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7524 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7525 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7526 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7527 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7528 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7529 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7530 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7531 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7532 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7533 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7534 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7535 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7536 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7537 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7538 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7539 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7540 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7541 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7542 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7543 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7544 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7545 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7546 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7547 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7548 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7549 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7550 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7551 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7552 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7553 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7554 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7555 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7556 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7557 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7558 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7559 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7560 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7561 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7562 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7563 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7564 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7565 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7566 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_7,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7567 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7568 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7569 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7570 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7571 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7572 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7573 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7574 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7575 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7576 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7577 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7578 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7579 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7580 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7581 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7582 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7583 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7584 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7585 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7586 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7587 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7588 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7589 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7590 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7591 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7592 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7593 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7594 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7595 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7596 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7597 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7598 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7599 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7600 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7601 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7602 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7603 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7604 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7605 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7606 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7607 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7608 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7609 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7610 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7611 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7612 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7613 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_8,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7614 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7615 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7616 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7617 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7618 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7619 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7620 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7621 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7622 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7623 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7624 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7625 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7626 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7627 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7628 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7629 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7630 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7631 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7632 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7633 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7634 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7635 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7636 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7637 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7638 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7639 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7640 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7641 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7642 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7643 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7644 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7645 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7646 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7647 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7648 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7649 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7650 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7651 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7652 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7653 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7654 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7655 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7656 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7657 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7658 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7659 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7660 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_9,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7661 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7662 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7663 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7664 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7665 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7666 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7667 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7668 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7669 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7670 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7671 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7672 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7673 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7674 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7675 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7676 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7677 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7678 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7679 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7680 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7681 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7682 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7683 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7684 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7685 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7686 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7687 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7688 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7689 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7690 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7691 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7692 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7693 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7694 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7695 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7696 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7697 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7698 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7699 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7700 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7701 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7702 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7703 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7704 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7705 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7706 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7707 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_10,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7708 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7709 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7710 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7711 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7712 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7713 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7714 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7715 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7716 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7717 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7718 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7719 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7720 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7721 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7722 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7723 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7724 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7725 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7726 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7727 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7728 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7729 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7730 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7731 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7732 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7733 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7734 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7735 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7736 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7737 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7738 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7739 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7740 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7741 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7742 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7743 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7744 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7745 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7746 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7747 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7748 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7749 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7750 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7751 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7752 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7753 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7754 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_11,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7755 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7756 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7757 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7758 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7759 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7760 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7761 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7762 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7763 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7764 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7765 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7766 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7767 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7768 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7769 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7770 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7771 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7772 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7773 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7774 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7775 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7776 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7777 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7778 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7779 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7780 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7781 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7782 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7783 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7784 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7785 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7786 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7787 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7788 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7789 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7790 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7791 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7792 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7793 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7794 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7795 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7796 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7797 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7798 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7799 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7800 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7801 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_12,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7802 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7803 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7804 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7805 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7806 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7807 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7808 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7809 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7810 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7811 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7812 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7813 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7814 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7815 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7816 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7817 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7818 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7819 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7820 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7821 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7822 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7823 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7824 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7825 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7826 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7827 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7828 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7829 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7830 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7831 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7832 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7833 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7834 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7835 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7836 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7837 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7838 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7839 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7840 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7841 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7842 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7843 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7844 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7845 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7846 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7847 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7848 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_13,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7849 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7850 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7851 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7852 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7853 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7854 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7855 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7856 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7857 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7858 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7859 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7860 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7861 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7862 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7863 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7864 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7865 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7866 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7867 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7868 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7869 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7870 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7871 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7872 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7873 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7874 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7875 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7876 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7877 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7878 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7879 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7880 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7881 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7882 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7883 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7884 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7885 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7886 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7887 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7888 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7889 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7890 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7891 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7892 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7893 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7894 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7895 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_14,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7896 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7897 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7898 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7899 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7900 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7901 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7902 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7903 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7904 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7905 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7906 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7907 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7908 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7909 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7910 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7911 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7912 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7913 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7914 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7915 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7916 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7917 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7918 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7919 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7920 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7921 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7922 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7923 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7924 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7925 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7926 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7927 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7928 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7929 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7930 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7931 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7932 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7933 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7934 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7935 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7936 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7937 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7938 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7939 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7940 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7941 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7942 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_15,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7943 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7944 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7945 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7946 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7947 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7948 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7949 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7950 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7951 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7952 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7953 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7954 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7955 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7956 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7957 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7958 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7959 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7960 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7961 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7962 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7963 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7964 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7965 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7966 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7967 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7968 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7969 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7970 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7971 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7972 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7973 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7974 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7975 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7976 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7977 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7978 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7979 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7980 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7981 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7982 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7983 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7984 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7985 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7986 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7987 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7988 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7989 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_16,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7990 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			7991 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7992 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7993 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7994 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7995 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7996 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7997 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7998 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			7999 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::ARRAY_SUBSET_17,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
