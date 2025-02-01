<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Constraints;

use Override;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
use function class_exists;
use function interface_exists;
use function is_object;
use function is_string;
use function is_subclass_of;
use function sprintf;

/**
 * Represents a constraint to determine if a value is a subclass of a class or implements an interface.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsSubClassOfConstraint extends AbstractConstraint implements IsSubClassOfConstraintInterface
{
	/**
	 * Represents the string representation template.
	 * @var string
	 */
	public const string STRING_REPRESENTATION_TEMPLATE = 'is a subclass of %1$s `%2$s`';

	/**
	 * Stores whether the expected type is an interface or a class.
	 * @var string
	 */
	private readonly string $typeKind;

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	protected string $stringRepresentationTemplate
		{
			get => static::STRING_REPRESENTATION_TEMPLATE;
		}

	/**
	 * Constructor method.
	 * @param string $interfaceOrClassName The name of the type.
	 * @throws UnknownClassOrInterfaceException The expected interface or class does not exist.
	 */
	public function __construct(
		private readonly string $interfaceOrClassName
	)
	{
		if ( interface_exists( $interfaceOrClassName ) === true )
		{
			$this->typeKind = 'interface';

			return;
		}

		if ( class_exists( $interfaceOrClassName ) === true )
		{
			$this->typeKind = 'class';

			return;
		}

		throw new UnknownClassOrInterfaceException( $interfaceOrClassName );
	}

	/**
	 * Gets the string representation of the constraint.
	 * @return string The string representation of the constraint.
	 */
	#[Override]
	public function toString(): string
	{
		return sprintf( $this->stringRepresentationTemplate, $this->typeKind, $this->interfaceOrClassName );
	}

	/**
	 * Determines if the value matches the subclass constraint.
	 * @param mixed $other The value to match the constraint against.
	 * @return bool True if the constraint is met, otherwise false.
	 */
	#[Override]
	protected function matches( mixed $other ): bool
	{
		if ( is_object( $other ) === false && is_string( $other ) === false )
		{
			return false;
		}

		return is_subclass_of( $other, $this->interfaceOrClassName, true ) === true;
	}
}
