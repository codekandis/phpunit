<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures;

use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ClassFixture;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ImplementingClassFixture;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\InterfaceFixture;

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
	 * Represents an interface name value.
	 * @var string
	 */
	public const string INTERFACE_NAME = InterfaceFixture::class;

	/**
	 * Represents an unknown interface name value.
	 * @var string
	 */
	public const string UNKNOWN_INTERFACE_NAME = 'UnknownInterfaceName';

	/**
	 * Represents a class name value.
	 * @var string
	 */
	public const string CLASS_NAME_0 = ClassFixture::class;

	/**
	 * Represents a class name value.
	 * @var string
	 */
	public const string CLASS_NAME_1 = ImplementingClassFixture::class;

	/**
	 * Represents an unknown class name value.
	 * @var string
	 */
	public const string UNKNOWN_CLASS_NAME = 'UnknownClassName';

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
	 * @var array< string, int|string >
	 */
	public const array ARRAY_9 = [
		'foo' => 'foo',
		'tt'  => 23,
		'ft'  => 42,
		'bar' => 'bar'
	];

	/**
	 * Represents an `array` value.
	 * @var array< string, int|string|array< string, int > >
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
		'sn'  => [
			'st' => 73,
			'oe' => 108
		]
	];

	/**
	 * Represents an `array` value.
	 * @var array< string, int|string >
	 */
	public const array ARRAY_11 = [
		'foo' => 'foo',
		'tt'  => 23,
		'ft'  => 42,
		'bar' => 'bar',
		's'   => 7,
		'sn'  => 69
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
	 * Represents a throwable code.
	 * @var int
	 */
	public const int THROWABLE_CODE = 0;

	/**
	 * Represents a previous throwable.
	 * @var null
	 */
	public const null PREVIOUS_THROWABLE = null;

	/**
	 * Creates a class fixture.
	 * @return ClassFixture The created class fixture.
	 */
	public static function createClassFixture(): ClassFixture
	{
		return new ClassFixture();
	}

	/**
	 * Creates an implementing class fixture.
	 * @return ImplementingClassFixture The created implementing class fixture.
	 */
	public static function createImplementingClassFixture(): ImplementingClassFixture
	{
		return new ImplementingClassFixture();
	}
}
