<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Fixtures\Objects;

/**
 * Represents an object fixture.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectFixture_0
{
	public float $value0 = NAN;

	protected array $values0 = [
		'foo',
		23,
		NAN
	];

	private ObjectFixture_1 $value1;

	public float $value2 = NAN {
		get => $this->value2;
		set => $this->value2 = $value;
	}

	public ObjectFixture_1 $value3 {
		get => $this->value3;
		set => $this->value3 = $value;
	}

	public function __construct(
		public float    $value4 = NAN,
		protected array $values1 = [
			'foo',
			NAN
		],
		private float   $value5 = NAN
	)
	{
		$this->values0[] = [
			'o2' => new ObjectFixture_2()
		];
		$this->values0[] = new ObjectFixture_1();
		$this->values1[] = new ObjectFixture_1();
		$this->value1 = new ObjectFixture_1();
		$this->value3 = new ObjectFixture_1();
	}
}
