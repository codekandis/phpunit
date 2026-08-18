<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures\Objects;

/**
 * Represents an object fixture.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectFixture_1
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

	private ObjectFixture_2 $value2;

	public float $value1 = NAN {
		get => $this->value1;
		set => $this->value1 = $value;
	}

	public function __construct()
	{
		$this->values0[] = new ObjectFixture_2();
		$this->values1[] = new ObjectFixture_2();
		$this->value2 = new ObjectFixture_2();
	}
}
