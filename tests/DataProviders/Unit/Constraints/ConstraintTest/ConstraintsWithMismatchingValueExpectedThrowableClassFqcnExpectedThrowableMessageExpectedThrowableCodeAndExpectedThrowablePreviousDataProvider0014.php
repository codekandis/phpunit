<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
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
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0014 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			14000 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14001 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14002 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14003 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14004 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14005 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14006 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14007 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14008 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14009 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14010 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14011 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14012 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14013 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14014 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14015 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14016 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14017 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14018 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14019 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14020 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14021 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14022 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14023 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14024 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14025 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14026 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14027 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14028 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14029 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14030 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14031 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14032 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14033 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14034 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14035 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14036 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14037 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14038 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14039 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14040 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14041 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14042 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14043 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14044 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14045 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14046 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14047 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14048 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14049 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14050 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14051 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14052 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14053 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14054 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14055 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14056 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14057 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14058 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14059 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14060 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14061 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14062 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14063 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14064 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14065 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14066 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14067 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			14068 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14069 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14070 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14071 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14072 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14073 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14074 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14075 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14076 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14077 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14078 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14079 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14080 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14081 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14082 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14083 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14084 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14085 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14086 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14087 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14088 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14089 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14090 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14091 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14092 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14093 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14094 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14095 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14096 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14097 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14098 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14099 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14100 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14101 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14102 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14103 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14104 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14105 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14106 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14107 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14108 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14109 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14110 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14111 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14112 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14113 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14114 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14115 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14116 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14117 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14118 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14119 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14120 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14121 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14122 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14123 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14124 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14125 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14126 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14127 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14128 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14129 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14130 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14131 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14132 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14133 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14134 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14135 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14136 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
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
			14137 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14138 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14139 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14140 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14141 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14142 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14143 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14144 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14145 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14146 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14147 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14148 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14149 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14150 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14151 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14152 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14153 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14154 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14155 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14156 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14157 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14158 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14159 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14160 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14161 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14162 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14163 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14164 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14165 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14166 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14167 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14168 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14169 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14170 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14171 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14172 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14173 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14174 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14175 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14176 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14177 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14178 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14179 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14180 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14181 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14182 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14183 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14184 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14185 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14186 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14187 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14188 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14189 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14190 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14191 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14192 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14193 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14194 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14195 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14196 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14197 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14198 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14199 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14200 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14201 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14202 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14203 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14204 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14205 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
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
			14206 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14207 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14208 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14209 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14210 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14211 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14212 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14213 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14214 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14215 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14216 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14217 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14218 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14219 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14220 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14221 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14222 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14223 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14224 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14225 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14226 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14227 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14228 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14229 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14230 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14231 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14232 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14233 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14234 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14235 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14236 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14237 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14238 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14239 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14240 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14241 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14242 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14243 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14244 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14245 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14246 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14247 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14248 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14249 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14250 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14251 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14252 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14253 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14254 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14255 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14256 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14257 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14258 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14259 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14260 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14261 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14262 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14263 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14264 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14265 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14266 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14267 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14268 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14269 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14270 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14271 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14272 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14273 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14274 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
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
			14275 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14276 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14277 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14278 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14279 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14280 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14281 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14282 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14283 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14284 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14285 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14286 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14287 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14288 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14289 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14290 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14291 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14292 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14293 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14294 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14295 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14296 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14297 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14298 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14299 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14300 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14301 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14302 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14303 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14304 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14305 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14306 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14307 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14308 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14309 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14310 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14311 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14312 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14313 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14314 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14315 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14316 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14317 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14318 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14319 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14320 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14321 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14322 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14323 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14324 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14325 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14326 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14327 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14328 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14329 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14330 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14331 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14332 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14333 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14334 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14335 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14336 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14337 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14338 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14339 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14340 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14341 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14342 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14343 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
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
			14344 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14345 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14346 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14347 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14348 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14349 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14350 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14351 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14352 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14353 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14354 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14355 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14356 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14357 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14358 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14359 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14360 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14361 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14362 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14363 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14364 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14365 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14366 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14367 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14368 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14369 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14370 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14371 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14372 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14373 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14374 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14375 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14376 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14377 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14378 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14379 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14380 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14381 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14382 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14383 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14384 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14385 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14386 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14387 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14388 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14389 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14390 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14391 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14392 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14393 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14394 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14395 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14396 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14397 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14398 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14399 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14400 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14401 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14402 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14403 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14404 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14405 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14406 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14407 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14408 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14409 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14410 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14411 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14412 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
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
			14413 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14414 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14415 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14416 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14417 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14418 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14419 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14420 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14421 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14422 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14423 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14424 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14425 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14426 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14427 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14428 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14429 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14430 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14431 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14432 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14433 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14434 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14435 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14436 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14437 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14438 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14439 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14440 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14441 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14442 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14443 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14444 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14445 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14446 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14447 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14448 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14449 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14450 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14451 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14452 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14453 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14454 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14455 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14456 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14457 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14458 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14459 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14460 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14461 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14462 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14463 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14464 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14465 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14466 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14467 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14468 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14469 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14470 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14471 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14472 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14473 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14474 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14475 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14476 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14477 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14478 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14479 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14480 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14481 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
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
			14482 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14483 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14484 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14485 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14486 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14487 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14488 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14489 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14490 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14491 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14492 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14493 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14494 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14495 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14496 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14497 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14498 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14499 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14500 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14501 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14502 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14503 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14504 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14505 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14506 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14507 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14508 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14509 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14510 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14511 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14512 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14513 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14514 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14515 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14516 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14517 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14518 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14519 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14520 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14521 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14522 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14523 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14524 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14525 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14526 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14527 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14528 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14529 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14530 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14531 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14532 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14533 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14534 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14535 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14536 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14537 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14538 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14539 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14540 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14541 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14542 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14543 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14544 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14545 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14546 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14547 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14548 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14549 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14550 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
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
			14551 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14552 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14553 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14554 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14555 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14556 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14557 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14558 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14559 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14560 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14561 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14562 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14563 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14564 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14565 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14566 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14567 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14568 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14569 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14570 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14571 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14572 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14573 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14574 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14575 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14576 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14577 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14578 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14579 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14580 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14581 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14582 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14583 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14584 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14585 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14586 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14587 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14588 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14589 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14590 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14591 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14592 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14593 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14594 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14595 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14596 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14597 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14598 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14599 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14600 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14601 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14602 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14603 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14604 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14605 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14606 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14607 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14608 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14609 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14610 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14611 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14612 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14613 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14614 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14615 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14616 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14617 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14618 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14619 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
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
			14620 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14621 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14622 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14623 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14624 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14625 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14626 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14627 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14628 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14629 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14630 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14631 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14632 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14633 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14634 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14635 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14636 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14637 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14638 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14639 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14640 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14641 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14642 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14643 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14644 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14645 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14646 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14647 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14648 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14649 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14650 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14651 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14652 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14653 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14654 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14655 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14656 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14657 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14658 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14659 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14660 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14661 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14662 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14663 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14664 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14665 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14666 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14667 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14668 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14669 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14670 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14671 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14672 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14673 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14674 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14675 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14676 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14677 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14678 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14679 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14680 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14681 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14682 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14683 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14684 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14685 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14686 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14687 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
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
			14688 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14689 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14690 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14691 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14692 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14693 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14694 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14695 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14696 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14697 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14698 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14699 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14700 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14701 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14702 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14703 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14704 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14705 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14706 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14707 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14708 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14709 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14710 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14711 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14712 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14713 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14714 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14715 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14716 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14717 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14718 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14719 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14720 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14721 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14722 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14723 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14724 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14725 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14726 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14727 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14728 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14729 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14730 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14731 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14732 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14733 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14734 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14735 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14736 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14737 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14738 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14739 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14740 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14741 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14742 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14743 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14744 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14745 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14746 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14747 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14748 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14749 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14750 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14751 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14752 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14753 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14754 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14755 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14756 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
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
			14757 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14758 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14759 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14760 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14761 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14762 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14763 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14764 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14765 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14766 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14767 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14768 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14769 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14770 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14771 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14772 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14773 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14774 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14775 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14776 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14777 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14778 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14779 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14780 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14781 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14782 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14783 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14784 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14785 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14786 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14787 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14788 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14789 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14790 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14791 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14792 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14793 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14794 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14795 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14796 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14797 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14798 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14799 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14800 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14801 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14802 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14803 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14804 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14805 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14806 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14807 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14808 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14809 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14810 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14811 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14812 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14813 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14814 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14815 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14816 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14817 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14818 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14819 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14820 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14821 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14822 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14823 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
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
			14824 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14825 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14826 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14827 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14828 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14829 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14830 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14831 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14832 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14833 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14834 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14835 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14836 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14837 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14838 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14839 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14840 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14841 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14842 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14843 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14844 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14845 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14846 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14847 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14848 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14849 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14850 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14851 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14852 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14853 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14854 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14855 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14856 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14857 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14858 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14859 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14860 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14861 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14862 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14863 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14864 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14865 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14866 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14867 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14868 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14869 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14870 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14871 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14872 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14873 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14874 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14875 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14876 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14877 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14878 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14879 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14880 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14881 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14882 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14883 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14884 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14885 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14886 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14887 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14888 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14889 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14890 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
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
			14891 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14892 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14893 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14894 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14895 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14896 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14897 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14898 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14899 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14900 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14901 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14902 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14903 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14904 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14905 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14906 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14907 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14908 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14909 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14910 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14911 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14912 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14913 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14914 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14915 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14916 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14917 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14918 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14919 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14920 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14921 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14922 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14923 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14924 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14925 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14926 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14927 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14928 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14929 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14930 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14931 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14932 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14933 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14934 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14935 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14936 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14937 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14938 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14939 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14940 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14941 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14942 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14943 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14944 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14945 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14946 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14947 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14948 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14949 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14950 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14951 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14952 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14953 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14954 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14955 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14956 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14957 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14958 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14959 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
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
			14960 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14961 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14962 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14963 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14964 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14965 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14966 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14967 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14968 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14969 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14970 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14971 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14972 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14973 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14974 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14975 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14976 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14977 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14978 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14979 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14980 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14981 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14982 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14983 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14984 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14985 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14986 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14987 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14988 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14989 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14990 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14991 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14992 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14993 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14994 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14995 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14996 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14997 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14998 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			14999 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
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
			]
		];
	}
}
