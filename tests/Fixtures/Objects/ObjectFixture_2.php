<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures\Objects;

/**
 * Represents an object fixture.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectFixture_2
{
	public array $values0 = [
		'foo',
		[
			23,
			NAN
		]
	];

	protected float $value0 = NAN;

	private array $values1 = [
		'foo' => 42,
		'nan' => NAN
	];

	public float $value1 = NAN {
		get => $this->value1;
		set => $this->value1 = $value;
	}
}
