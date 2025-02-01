<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

use Override;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
use function class_exists;
use function interface_exists;
use function is_subclass_of;
use function sprintf;

/**
 * Represents a constraint to determine if a value is a subclass of an interface or class.
 */
final class IsSubClassOf extends Constraint
{
	/**
	 * Stores the interface or class name.
	 * @var string
	 */
	private readonly string $interfaceOrClassName;

	/**
	 * Stores the type of the type.
	 * @var string
	 */
	private readonly string $typeType;

	/**
	 * Constructor method.
	 * @param string $interfaceOrClassName The name of the type.
	 * @throws UnknownClassOrInterfaceException The type is neither an interface nor class.
	 */
	public function __construct( string $interfaceOrClassName )
	{
		if (
			class_exists( $interfaceOrClassName )
		)
		{
			$this->typeType = 'class';
		}
		else if (
			interface_exists( $interfaceOrClassName )
		)
		{
			$this->typeType = 'interface';
		}
		else
		{
			throw new UnknownClassOrInterfaceException( $interfaceOrClassName );
		}

		$this->interfaceOrClassName = $interfaceOrClassName;
	}

	/**
	 * Gets the string representation of the constraint.
	 * @return string The string representation of the constraint.
	 */
	#[Override]
	public function toString(): string
	{
		return sprintf( 'is a subclass of %s %s', $this->typeType, $this->interfaceOrClassName );
	}

	/**
	 * Evaluates the constraint for a specific value.
	 * @param mixed $other The value to evaluate the constraint against.
	 * @return bool true if the constraint is met, otherwise false.
	 */
	#[Override]
	protected function matches( mixed $other ): bool
	{
		return is_subclass_of( $other, $this->interfaceOrClassName, true );
	}

	/**
	 * Returns the description of the failure.
	 * @param mixed $other The value to get its type.
	 * @return string The description of the failure.
	 */
	#[Override]
	protected function failureDescription( mixed $other ): string
	{
		return sprintf(
			'%s%s',
			$this->valueToTypeStringFragment( $other ),
			$this->toString()
		);
	}
}
