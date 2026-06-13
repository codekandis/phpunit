<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;

/**
 * Represents a data provider providing constraints with mismatching value, expected throwable FQCN, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0001 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			1000 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1001 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1002 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1003 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1004 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1005 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1006 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1007 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1008 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1009 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1010 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1011 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1012 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1013 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1014 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1015 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1016 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1017 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1018 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1019 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1020 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1021 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1022 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1023 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1024 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1025 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1026 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1027 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1028 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1029 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1030 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1031 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1032 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1033 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1034 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1035 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1036 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1037 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1038 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1039 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1040 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1041 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1042 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1043 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1044 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1045 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1046 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1047 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1048 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1049 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1050 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1051 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1052 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1053 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1054 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1055 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1056 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1057 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1058 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1059 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1060 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1061 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1062 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1063 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1064 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1065 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1066 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1067 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1068 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1069 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1070 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1071 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1072 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1073 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1074 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1075 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1076 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1077 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1078 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1079 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1080 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1081 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1082 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1083 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1084 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1085 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1086 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1087 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1088 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1089 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1090 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1091 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1092 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1093 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1094 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1095 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1096 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1097 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1098 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1099 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1100 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1101 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1102 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1103 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1104 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1105 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1106 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1107 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1108 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1109 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1110 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1111 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1112 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1113 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1114 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1115 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1116 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1117 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1118 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1119 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1120 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1121 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1122 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1123 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1124 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1125 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1126 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1127 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1128 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1129 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1130 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1131 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1132 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1133 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1134 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1135 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1136 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1137 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1138 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1139 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1140 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1141 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1142 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1143 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1144 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1145 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1146 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1147 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1148 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1149 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1150 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1151 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1152 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1153 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1154 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1155 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1156 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1157 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1158 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1159 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1160 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1161 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1162 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1163 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1164 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1165 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1166 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1167 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1168 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1169 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1170 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1171 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1172 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1173 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1174 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1175 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1176 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1177 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1178 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1179 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1180 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1181 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1182 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1183 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1184 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1185 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1186 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1187 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1188 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1189 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1190 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1191 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1192 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1193 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1194 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1195 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1196 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1197 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1198 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1199 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1200 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1201 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1202 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1203 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1204 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1205 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1206 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1207 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1208 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1209 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1210 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1211 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1212 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1213 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1214 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1215 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1216 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1217 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1218 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1219 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1220 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1221 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1222 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1223 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1224 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1225 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1226 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1227 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1228 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1229 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1230 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1231 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1232 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1233 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1234 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1235 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1236 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1237 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1238 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1239 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1240 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1241 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1242 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1243 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1244 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1245 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1246 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1247 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1248 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1249 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1250 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1251 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1252 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1253 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1254 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1255 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1256 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1257 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1258 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1259 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1260 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1261 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1262 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1263 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1264 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1265 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1266 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1267 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1268 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1269 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1270 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1271 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1272 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1273 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1274 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1275 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1276 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1277 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1278 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1279 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1280 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1281 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1282 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1283 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1284 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1285 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1286 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1287 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1288 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1289 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1290 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1291 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1292 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1293 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1294 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1295 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1296 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1297 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1298 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1299 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1300 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1301 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1302 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1303 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1304 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1305 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1306 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1307 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1308 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1309 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1310 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1311 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1312 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1313 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1314 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1315 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1316 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1317 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1318 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1319 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1320 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1321 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1322 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1323 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1324 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1325 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1326 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1327 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1328 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1329 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1330 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1331 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1332 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1333 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1334 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1335 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1336 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1337 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1338 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1339 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1340 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1341 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1342 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1343 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1344 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1345 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1346 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1347 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1348 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1349 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1350 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1351 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1352 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1353 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1354 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1355 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1356 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1357 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1358 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1359 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1360 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1361 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1362 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1363 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1364 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1365 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1366 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1367 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1368 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1369 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1370 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1371 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1372 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1373 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1374 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1375 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1376 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1377 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1378 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1379 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1380 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1381 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1382 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1383 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1384 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1385 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1386 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1387 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1388 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1389 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1390 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1391 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1392 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1393 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1394 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1395 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1396 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1397 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1398 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1399 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1400 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1401 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1402 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1403 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1404 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1405 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1406 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1407 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1408 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1409 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1410 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1411 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1412 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1413 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1414 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1415 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1416 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1417 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1418 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1419 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1420 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1421 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1422 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1423 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1424 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1425 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1426 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1427 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1428 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1429 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1430 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1431 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1432 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1433 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1434 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1435 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1436 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1437 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1438 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1439 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1440 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1441 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1442 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1443 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1444 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1445 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1446 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1447 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1448 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1449 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1450 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1451 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1452 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1453 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1454 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1455 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1456 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1457 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1458 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1459 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1460 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1461 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1462 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1463 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1464 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1465 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1466 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1467 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1468 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1469 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1470 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1471 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1472 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1473 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1474 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1475 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1476 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1477 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1478 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1479 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1480 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1481 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1482 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1483 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1484 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1485 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1486 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1487 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1488 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1489 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1490 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1491 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1492 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1493 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1494 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1495 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1496 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1497 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1498 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1499 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1500 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1501 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1502 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1503 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1504 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1505 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1506 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1507 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1508 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1509 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1510 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1511 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1512 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1513 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1514 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1515 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1516 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1517 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1518 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1519 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1520 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1521 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1522 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1523 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1524 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1525 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1526 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1527 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1528 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1529 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1530 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1531 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1532 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1533 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1534 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1535 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1536 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1537 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1538 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1539 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1540 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1541 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1542 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1543 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1544 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1545 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1546 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1547 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1548 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1549 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1550 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1551 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1552 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1553 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1554 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1555 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1556 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1557 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1558 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1559 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1560 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1561 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1562 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1563 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1564 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1565 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1566 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1567 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1568 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1569 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1570 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1571 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1572 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1573 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1574 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1575 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1576 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1577 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1578 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1579 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1580 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1581 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1582 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1583 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1584 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1585 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1586 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1587 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1588 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1589 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1590 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1591 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1592 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1593 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1594 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1595 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1596 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1597 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1598 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1599 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1600 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1601 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1602 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1603 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1604 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1605 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1606 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1607 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1608 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1609 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1610 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1611 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1612 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1613 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1614 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1615 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1616 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1617 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1618 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1619 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1620 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1621 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1622 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1623 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1624 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1625 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1626 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1627 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1628 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1629 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1630 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1631 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1632 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1633 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1634 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1635 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1636 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1637 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1638 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1639 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1640 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1641 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1642 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1643 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1644 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1645 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1646 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1647 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1648 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1649 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1650 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1651 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1652 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1653 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1654 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1655 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1656 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1657 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1658 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1659 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1660 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1661 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1662 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1663 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1664 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1665 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1666 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1667 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1668 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1669 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1670 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1671 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1672 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1673 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1674 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1675 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1676 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1677 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1678 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1679 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1680 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1681 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1682 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1683 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1684 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1685 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1686 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1687 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1688 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1689 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1690 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1691 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1692 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1693 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1694 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1695 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1696 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1697 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1698 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1699 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1700 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1701 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1702 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1703 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1704 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1705 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1706 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1707 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1708 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1709 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1710 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1711 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1712 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1713 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1714 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1715 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1716 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1717 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1718 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1719 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1720 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1721 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1722 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1723 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1724 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1725 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1726 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1727 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1728 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1729 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1730 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1731 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1732 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1733 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1734 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1735 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1736 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1737 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1738 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1739 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1740 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1741 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1742 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1743 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1744 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1745 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1746 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1747 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1748 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1749 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1750 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1751 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1752 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1753 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1754 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1755 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1756 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1757 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1758 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1759 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1760 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1761 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1762 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1763 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1764 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1765 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1766 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1767 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1768 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1769 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1770 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1771 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1772 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1773 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1774 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1775 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1776 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1777 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1778 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1779 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1780 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1781 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1782 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1783 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1784 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1785 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1786 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1787 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1788 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1789 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1790 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1791 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1792 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1793 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1794 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1795 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1796 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1797 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1798 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1799 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1800 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1801 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1802 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1803 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1804 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1805 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1806 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1807 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1808 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1809 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1810 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1811 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1812 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1813 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1814 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1815 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1816 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1817 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1818 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1819 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1820 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1821 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1822 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1823 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1824 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1825 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1826 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1827 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1828 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1829 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1830 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1831 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1832 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1833 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1834 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1835 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1836 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1837 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1838 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1839 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1840 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1841 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1842 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1843 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1844 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1845 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1846 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1847 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1848 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1849 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1850 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1851 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1852 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1853 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1854 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1855 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1856 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1857 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1858 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1859 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1860 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1861 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1862 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1863 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1864 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1865 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1866 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1867 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1868 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1869 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1870 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1871 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1872 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1873 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1874 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1875 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1876 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1877 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1878 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1879 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1880 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1881 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1882 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1883 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1884 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1885 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1886 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1887 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1888 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1889 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1890 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1891 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1892 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1893 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1894 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1895 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1896 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1897 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1898 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1899 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1900 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1901 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1902 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1903 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1904 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1905 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1906 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1907 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1908 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1909 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1910 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1911 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1912 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1913 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1914 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1915 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1916 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1917 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1918 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1919 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1920 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1921 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1922 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1923 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1924 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1925 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1926 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1927 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1928 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1929 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1930 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1931 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1932 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1933 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1934 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1935 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1936 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1937 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1938 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1939 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1940 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1941 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1942 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1943 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1944 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1945 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1946 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1947 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1948 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1949 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1950 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1951 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTEGER_STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1952 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1953 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::FLOAT_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1954 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1955 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1956 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1957 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_INTERFACE_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1958 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1959 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::CLASS_FQCN_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1960 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::UNKNOWN_CLASS_FQCN,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1961 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1962 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1963 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1964 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1965 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1966 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1967 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1968 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_7,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1969 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1970 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1971 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1972 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1973 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1974 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1975 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_2,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1976 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_3,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1977 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_4,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1978 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_5,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1979 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_6,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1980 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_8,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1981 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_9,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1982 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_10,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1983 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_11,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1984 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1985 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1986 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_14,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1987 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_15,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1988 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_16,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1989 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_17,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1990 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1991 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createImplementingClassFixture(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1992 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1993 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::NULL_STRING,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1994 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1995 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1996 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1997 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_INTEGER_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1998 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			1999 => [
				'constraint'                 => $constraint = new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			]
		];
	}
}
