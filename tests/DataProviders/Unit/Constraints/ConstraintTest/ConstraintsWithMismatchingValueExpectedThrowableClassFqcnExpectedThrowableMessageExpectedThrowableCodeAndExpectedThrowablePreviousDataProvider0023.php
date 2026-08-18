<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;

/**
 * Represents a data provider providing constraints with mismatching value, expected throwable class FQCN, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0023 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			23000 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23001 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23002 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23003 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23004 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23005 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23006 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23007 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23008 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23009 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23010 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23011 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23012 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23013 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23014 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23015 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23016 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
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
			23017 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_0(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23018 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_1(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23019 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23020 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23021 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_18,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23022 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_19,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23023 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_20,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23024 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_14(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23025 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_15(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23026 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_21(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23027 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_22(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23028 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_23(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23029 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_24(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23030 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_25(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23031 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_17(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23032 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_27(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23033 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_28(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23034 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23035 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23036 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23037 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23038 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23039 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23040 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23041 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23042 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23043 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23044 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23045 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23046 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23047 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23048 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23049 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23050 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23051 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23052 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23053 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23054 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23055 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23056 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23057 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23058 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23059 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23060 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23061 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23062 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23063 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23064 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23065 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23066 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23067 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23068 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23069 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23070 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23071 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23072 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23073 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23074 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23075 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23076 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23077 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23078 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23079 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23080 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23081 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
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
			23082 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_0(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23083 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_1(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23084 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23085 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23086 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_18,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23087 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_19,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23088 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_20,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23089 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_14(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23090 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_15(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23091 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_21(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23092 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_22(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23093 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_23(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23094 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_24(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23095 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_25(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23096 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_17(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23097 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_27(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23098 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_28(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23099 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23100 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23101 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23102 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23103 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23104 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23105 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23106 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23107 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23108 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23109 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23110 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23111 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23112 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23113 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23114 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23115 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23116 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23117 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23118 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23119 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23120 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23121 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23122 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23123 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23124 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23125 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23126 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23127 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23128 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23129 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23130 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23131 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23132 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23133 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23134 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23135 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23136 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23137 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23138 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23139 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23140 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23141 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23142 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23143 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23144 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23145 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23146 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23147 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23148 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23149 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
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
			23150 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_0(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23151 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_1(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23152 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23153 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23154 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_18,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23155 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_19,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23156 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_20,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23157 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_14(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23158 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_15(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23159 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_21(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23160 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_22(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23161 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_23(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23162 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_24(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23163 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_25(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23164 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_16(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23165 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_17(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23166 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_26(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23167 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_28(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23168 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23169 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23170 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23171 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23172 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23173 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23174 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23175 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23176 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23177 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23178 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23179 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23180 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23181 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23182 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23183 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23184 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23185 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23186 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23187 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23188 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23189 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23190 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23191 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23192 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23193 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23194 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23195 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23196 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23197 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23198 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23199 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23200 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23201 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23202 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23203 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23204 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23205 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23206 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23207 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23208 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23209 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23210 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23211 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23212 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23213 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23214 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23215 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23216 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23217 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23218 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
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
			23219 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_0(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23220 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_1(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23221 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23222 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23223 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_18,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23224 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_19,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23225 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_20,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23226 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_14(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23227 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_15(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23228 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_21(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23229 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_22(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23230 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_23(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23231 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_24(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23232 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_25(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23233 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_16(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23234 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_17(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23235 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_26(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23236 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_28(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23237 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23238 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23239 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23240 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23241 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23242 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23243 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23244 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23245 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23246 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23247 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23248 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23249 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23250 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23251 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23252 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23253 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23254 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23255 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23256 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23257 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23258 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23259 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23260 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23261 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23262 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23263 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23264 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23265 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23266 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23267 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23268 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23269 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23270 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23271 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23272 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23273 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23274 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23275 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23276 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23277 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23278 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23279 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23280 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23281 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23282 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23283 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23284 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23285 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23286 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23287 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
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
			23288 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_0(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23289 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_1(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23290 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23291 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23292 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_18,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23293 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_19,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23294 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_20,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23295 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_14(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23296 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_15(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23297 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_21(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23298 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_22(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23299 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_23(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23300 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_24(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23301 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_25(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23302 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_16(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23303 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_17(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23304 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_26(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23305 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_27(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23306 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23307 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23308 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23309 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23310 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23311 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23312 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23313 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23314 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23315 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23316 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23317 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23318 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23319 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23320 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23321 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23322 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23323 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23324 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::INTERFACE_FQCN_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23325 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23326 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23327 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23328 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23329 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23330 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23331 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23332 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23333 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23334 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23335 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23336 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23337 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23338 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23339 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23340 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23341 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23342 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23343 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23344 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23345 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23346 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23347 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23348 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23349 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23350 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23351 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23352 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23353 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23354 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23355 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23356 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
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
			23357 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_0(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23358 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createClassFixture_1(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23359 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_12,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23360 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_13,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23361 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_18,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23362 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_19,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23363 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::ARRAY_SUBSET_20,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23364 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_14(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23365 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_15(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23366 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_21(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23367 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_22(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23368 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_23(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23369 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_24(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23370 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_25(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23371 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_16(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23372 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArray_17(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23373 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_26(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23374 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_27(),
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => sprintf(
					'Failed asserting that %1$s%2$s.',
					new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
						->valueToTypeStringFragment( $mismatchingValue ),
					$constraint->toString()
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS
			],
			23375 => [
				'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'mismatchingValue'           => $mismatchingValue = Values::createArraySubset_28(),
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
