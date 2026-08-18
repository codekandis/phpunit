<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures;

use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_0;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_1;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_10;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_11;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_2;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_3;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_4;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_5;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_6;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_7;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_8;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture_9;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\InterfaceFixture_0;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\InterfaceFixture_1;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\InterfaceFixture_2;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ObjectFixture_0;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ObjectFixture_1;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ObjectFixture_2;

/**
 * Represents an enumeration of fixture values.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a `null string` value.
	 * @var string
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean false` value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents a `boolean integer false` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer true` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents a `boolean string false` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string true` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a `boolean integer string false` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string true` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents an `integer` value.
	 * @var int
	 */
	public const int INTEGER_0 = 23;

	/**
	 * Represents an `integer` value.
	 * @var int
	 */
	public const int INTEGER_1 = 42;

	/**
	 * Represents an `integer string` value.
	 * @var string
	 */
	public const string INTEGER_STRING_0 = '23';

	/**
	 * Represents an `integer string` value.
	 * @var string
	 */
	public const string INTEGER_STRING_1 = '42';

	/**
	 * Represents a `NAN` value.
	 * @var float
	 */
	public const float NAN = NAN;

	/**
	 * Represents a `NAN string` value.
	 * @var string
	 */
	public const string NAN_STRING = 'NAN';

	/**
	 * Represents a `float` value.
	 * @var float
	 */
	public const float FLOAT = 42.24;

	/**
	 * Represents a `float string` value.
	 * @var string
	 */
	public const string FLOAT_STRING = '42.24';

	/**
	 * Represents an `empty string` value.
	 * @var string
	 */
	public const string EMPTY_STRING = '';

	/**
	 * Represents a `string` value.
	 * @var string
	 */
	public const string STRING_0 = 'foo';

	/**
	 * Represents a `string` value.
	 * @var string
	 */
	public const string STRING_1 = 'bar';

	/**
	 * Represents an interface FQCN value.
	 * @var string
	 */
	public const string INTERFACE_FQCN_0 = InterfaceFixture_0::class;

	/**
	 * Represents an interface FQCN value.
	 * @var string
	 */
	public const string INTERFACE_FQCN_1 = InterfaceFixture_1::class;

	/**
	 * Represents an interface FQCN value.
	 * @var string
	 */
	public const string INTERFACE_FQCN_2 = InterfaceFixture_2::class;

	/**
	 * Represents an unknown interface FQCN value.
	 * @var string
	 */
	public const string UNKNOWN_INTERFACE_FQCN = 'UnknownInterfaceFqcn';

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_0 = ClassFixture_0::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_1 = ClassFixture_1::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_2 = ClassFixture_2::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_3 = ClassFixture_3::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_4 = ClassFixture_4::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_5 = ClassFixture_5::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_6 = ClassFixture_6::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_7 = ClassFixture_7::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_8 = ClassFixture_8::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_9 = ClassFixture_9::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_10 = ClassFixture_10::class;

	/**
	 * Represents a FQCN value.
	 * @var string
	 */
	public const string CLASS_FQCN_11 = ClassFixture_11::class;

	/**
	 * Represents an unknown FQCN value.
	 * @var string
	 */
	public const string UNKNOWN_CLASS_FQCN = 'UnknownClassFqcn';

	/**
	 * Represents an `array` value.
	 * @var array{}
	 */
	public const array ARRAY_0 = [];

	/**
	 * Represents an `array` value.
	 * @var array< int, int|string >
	 */
	public const array ARRAY_1 = [
		23,
		'foo'
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, int|string >
	 */
	public const array ARRAY_2 = [
		'bar',
		42,
		'foo'
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, string >
	 */
	public const array ARRAY_3 = [
		'foo'
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, string >
	 */
	public const array ARRAY_4 = [
		'foo',
		'foo'
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, array< string, int > >
	 */
	public const array ARRAY_5 = [
		[
			'tt' => 42
		],
		[
			'tt' => 23
		]
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, array< string, int > >
	 */
	public const array ARRAY_6 = [
		[
			'tt' => 23
		]
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, int|array< string, int > >
	 */
	public const array ARRAY_7 = [
		23,
		[
			'tt' => 23
		]
	];

	/**
	 * Represents an `array` value.
	 * @var array< int, string|array< string, int > >
	 */
	public const array ARRAY_8 = [
		[
			'tt' => 23
		],
		'foo'
	];

	/**
	 * Represents an `array` value.
	 * @var array< string, float|int|string >
	 */
	public const array ARRAY_9 = [
		'foo' => 'foo',
		'tt'  => 23,
		'nan' => NAN,
		'ft'  => 42,
		'bar' => 'bar'
	];

	/**
	 * Represents an `array` value.
	 * @var array< string, float|int|string|array< string, int > >
	 */
	public const array ARRAY_10 = [
		'foo' => 'foo',
		'tt'  => 23,
		'ft'  => 42,
		'bar' => 'bar',
		's'   => [
			't'  => 13,
			'ts' => 37
		],
		'nan' => NAN,
		'sn'  => [
			'st' => 73,
			'oe' => 108
		]
	];

	/**
	 * Represents an `array` value.
	 * @var array< string, float|int|string >
	 */
	public const array ARRAY_11 = [
		'foo' => 'foo',
		'tt'  => 23,
		'ft'  => 42,
		'bar' => 'bar',
		's'   => 7,
		'sn'  => 69,
		'nan' => NAN
	];

	/**
	 * Represents an `array` value.
	 * @var array< string, float|int|string >
	 */
	public const array ARRAY_12 = [
		'foo' => 'foo',
		'ft'  => 42,
		'nan' => NAN,
		'bar' => 'bar',
		'tt'  => 23
	];

	/**
	 * Represents an `array` value.
	 * @var array< int|string, float|int|string >
	 */
	public const array ARRAY_13 = [
		'foo' => 'foo',
		'tt'  => 23,
		'ft'  => 42,
		'bar' => 'bar',
		23    => NAN
	];

	/**
	 * Represents an `array subset` value.
	 * @var array{}
	 */
	public const array ARRAY_SUBSET_0 = [];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, string >
	 */
	public const array ARRAY_SUBSET_1 = [
		'foo'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, string >
	 */
	public const array ARRAY_SUBSET_2 = [
		'foo',
		'foo'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, array< string, int > >
	 */
	public const array ARRAY_SUBSET_3 = [
		[
			'tt' => 23
		]
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, array< string, int > >
	 */
	public const array ARRAY_SUBSET_4 = [
		[
			'tt' => 23
		],
		[
			'tt' => 23
		]
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, string|array< string, int > >
	 */
	public const array ARRAY_SUBSET_5 = [
		[
			'tt' => 23
		],
		'foo'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, string >
	 */
	public const array ARRAY_SUBSET_6 = [
		'foo' => 'foo'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, string >
	 */
	public const array ARRAY_SUBSET_7 = [
		'tt' => '23'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, int >
	 */
	public const array ARRAY_SUBSET_8 = [
		'foo' => 108
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, array< string, int > >
	 */
	public const array ARRAY_SUBSET_9 = [
		's' => [
			't' => 13
		]
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, array< string, int > >
	 */
	public const array ARRAY_SUBSET_10 = [
		's' => [
			't' => 37
		]
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, int >
	 */
	public const array ARRAY_SUBSET_11 = [
		's' => 7
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, array< string, int > >
	 */
	public const array ARRAY_SUBSET_12 = [
		'tt' => [
			't' => 13
		]
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, int >
	 */
	public const array ARRAY_SUBSET_13 = [
		23 => 23
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, int >
	 */
	public const array ARRAY_SUBSET_14 = [
		'tt' => 23,
		'ft' => 23
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, string|array< string, int > >
	 */
	public const array ARRAY_SUBSET_15 = [
		's'   => [
			't' => 13
		],
		'foo' => 'foo'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, string|array< string, int > >
	 */
	public const array ARRAY_SUBSET_16 = [
		'sn'  => [
			'st' => 73
		],
		'bar' => 'bar'
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, int|array< string, int > >
	 */
	public const array ARRAY_SUBSET_17 = [
		'sn'  => [
			'st' => 73
		],
		'foo' => 108
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, float >
	 */
	public const array ARRAY_SUBSET_18 = [
		'nan' => NAN
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< string, float|string >
	 */
	public const array ARRAY_SUBSET_19 = [
		'tt'  => '23',
		'nan' => NAN
	];

	/**
	 * Represents an `array subset` value.
	 * @var array< int, float >
	 */
	public const array ARRAY_SUBSET_20 = [
		23 => NAN
	];

	/**
	 * Represents a throwable code.
	 * @var int
	 */
	public const int THROWABLE_CODE = 0;

	/**
	 * Represents a previous throwable.
	 * @var null
	 */
	public const null THROWABLE_PREVIOUS = null;

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_0 The created class fixture.
	 */
	public static function createClassFixture_0(): ClassFixture_0
	{
		return new ClassFixture_0();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_1 The created class fixture.
	 */
	public static function createClassFixture_1(): ClassFixture_1
	{
		return new ClassFixture_1();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_2 The created class fixture.
	 */
	public static function createClassFixture_2(): ClassFixture_2
	{
		return new ClassFixture_2();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_3 The created class fixture.
	 */
	public static function createClassFixture_3(): ClassFixture_3
	{
		return new ClassFixture_3();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_4 The created class fixture.
	 */
	public static function createClassFixture_4(): ClassFixture_4
	{
		return new ClassFixture_4();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_5 The created class fixture.
	 */
	public static function createClassFixture_5(): ClassFixture_5
	{
		return new ClassFixture_5();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_6 The created class fixture.
	 */
	public static function createClassFixture_6(): ClassFixture_6
	{
		return new ClassFixture_6();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_7 The created class fixture.
	 */
	public static function createClassFixture_7(): ClassFixture_7
	{
		return new ClassFixture_7();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_8 The created class fixture.
	 */
	public static function createClassFixture_8(): ClassFixture_8
	{
		return new ClassFixture_8();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_9 The created class fixture.
	 */
	public static function createClassFixture_9(): ClassFixture_9
	{
		return new ClassFixture_9();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_10 The created class fixture.
	 */
	public static function createClassFixture_10(): ClassFixture_10
	{
		return new ClassFixture_10();
	}

	/**
	 * Creates a class fixture.
	 * @return ClassFixture_11 The created class fixture.
	 */
	public static function createClassFixture_11(): ClassFixture_11
	{
		return new ClassFixture_11();
	}

	/**
	 * Creates an object fixture.
	 * @return ObjectFixture_0 The created object fixture.
	 */
	public static function createObjectFixture_0(): ObjectFixture_0
	{
		return new ObjectFixture_0();
	}

	/**
	 * Creates an object fixture.
	 * @return ObjectFixture_1 The created object fixture.
	 */
	public static function createObjectFixture_1(): ObjectFixture_1
	{
		return new ObjectFixture_1();
	}

	/**
	 * Creates an object fixture.
	 * @return ObjectFixture_2 The created object fixture.
	 */
	public static function createObjectFixture_2(): ObjectFixture_2
	{
		return new ObjectFixture_2();
	}

	/**
	 * Creates an `array` value.
	 * @return array< string, mixed > The created array value.
	 */
	public static function createArray_14(): array
	{
		$objectFixture = new ObjectFixture_0();

		return [
			'foo' => self::STRING_0,
			'tt'  => self::INTEGER_0,
			'ft'  => self::INTEGER_1,
			'bar' => self::STRING_1,
			's'   => [
				't'  => 13,
				'ts' => 37,
				'o0' => $objectFixture
			],
			'nan' => self::NAN,
			'sn'  => [
				'st' => 73,
				'oe' => 108,
				'o1' => new ObjectFixture_1()
			],
			'o0'  => $objectFixture
		];
	}

	/**
	 * Creates an `array` value.
	 * @return array< int, mixed > The created array value.
	 */
	public static function createArray_15(): array
	{
		return [
			self::INTEGER_0,
			[
				'tt' => self::INTEGER_0
			],
			self::STRING_0,
			new ObjectFixture_0(),
			[
				't'  => 13,
				'ts' => 37,
				'o1' => new ObjectFixture_1()
			],
			self::NAN,
			[
				'st' => 73,
				'oe' => 108
			],
			self::INTEGER_1,
			self::STRING_1,
			[
				new ObjectFixture_1(),
				self::NAN
			]
		];
	}

	/**
	 * Creates an `array` value.
	 * @return array< string, string|ObjectFixture_0 > The created array value.
	 */
	public static function createArray_16(): array
	{
		static $objectFixture = null;

		$objectFixture ??= new ObjectFixture_0();

		return [
			'foo' => self::STRING_0,
			'o0'  => $objectFixture
		];
	}

	/**
	 * Creates an `array` value.
	 * @return array< string, string|ObjectFixture_0|ObjectFixture_1 > The created array value.
	 */
	public static function createArray_17(): array
	{
		static $objectFixture = null;

		$objectFixture ??= new ObjectFixture_1();
		$array         = self::createArray_16();

		return [
			'foo' => self::STRING_0,
			'o0'  => $array[ 'o0' ],
			'bar' => self::STRING_1,
			'o1'  => $objectFixture
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< string, mixed > The created array subset value.
	 */
	public static function createArraySubset_21(): array
	{
		$objectFixture = new ObjectFixture_0();

		return [
			'nan' => self::NAN,
			'o0'  => $objectFixture,
			's'   => [
				't'  => 13,
				'ts' => 37,
				'o0' => $objectFixture
			]
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< string, mixed > The created array subset value.
	 */
	public static function createArraySubset_22(): array
	{
		return [
			'sn'  => [
				'st' => 73,
				'oe' => 108,
				'o1' => new ObjectFixture_1()
			],
			'foo' => self::STRING_0
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< string, mixed > The created array subset value.
	 */
	public static function createArraySubset_23(): array
	{
		return [
			'nan' => self::NAN,
			'o0'  => new ObjectFixture_2()
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< int, mixed > The created array subset value.
	 */
	public static function createArraySubset_24(): array
	{
		return [
			self::INTEGER_0,
			[
				'tt' => self::INTEGER_0
			],
			self::STRING_0,
			new ObjectFixture_0(),
			[
				't'  => 13,
				'ts' => 37,
				'o1' => new ObjectFixture_1()
			],
			self::NAN,
			[
				'st' => 73,
				'oe' => 108
			],
			self::INTEGER_1,
			self::STRING_1,
			[
				new ObjectFixture_1(),
				self::NAN
			]
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< int, mixed > The created array subset value.
	 */
	public static function createArraySubset_25(): array
	{
		return [
			self::INTEGER_0,
			self::STRING_0,
			new ObjectFixture_2()
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< string, string|ObjectFixture_0 > The created array subset value.
	 */
	public static function createArraySubset_26(): array
	{
		$array = self::createArray_16();

		return [
			'foo' => self::STRING_0,
			'o0'  => $array[ 'o0' ]
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< string, string|ObjectFixture_1 > The created array subset value.
	 */
	public static function createArraySubset_27(): array
	{
		$array = self::createArray_17();

		return [
			'bar' => self::STRING_1,
			'o1'  => $array[ 'o1' ]
		];
	}

	/**
	 * Creates an `array subset` value.
	 * @return array< string, ObjectFixture_0 > The created array subset value.
	 */
	public static function createArraySubset_28(): array
	{
		return [
			'o0' => new ObjectFixture_0( self::FLOAT )
		];
	}
}
