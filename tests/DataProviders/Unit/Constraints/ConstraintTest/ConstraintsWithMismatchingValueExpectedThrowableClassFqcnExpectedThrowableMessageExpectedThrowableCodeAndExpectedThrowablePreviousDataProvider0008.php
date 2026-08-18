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
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0008 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			8000 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8001 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8002 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8003 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8004 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8005 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8006 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8007 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8008 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8009 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8010 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8011 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8012 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8013 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8014 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8015 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
			8016 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8017 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8018 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8019 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8020 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8021 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8022 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8023 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8024 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8025 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8026 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8027 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8028 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8029 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8030 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8031 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8032 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8033 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8034 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8035 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8036 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8037 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8038 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8039 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8040 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8041 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8042 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8043 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8044 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8045 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8046 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8047 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8048 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8049 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8050 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8051 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8052 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8053 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8054 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8055 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8056 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8057 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8058 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8059 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8060 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8061 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8062 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8063 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8064 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8065 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8066 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8067 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8068 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8069 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8070 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8071 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
			8072 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8073 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8074 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8075 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8076 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8077 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8078 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8079 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8080 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8081 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8082 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8083 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8084 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8085 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8086 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8087 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8088 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8089 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8090 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8091 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8092 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8093 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8094 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8095 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8096 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8097 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8098 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8099 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8100 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8101 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8102 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8103 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8104 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8105 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8106 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8107 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8108 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8109 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8110 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8111 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8112 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8113 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8114 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8115 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8116 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8117 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8118 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8119 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8120 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8121 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8122 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8123 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8124 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8125 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
			8126 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8127 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8128 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8129 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8130 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8131 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8132 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8133 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8134 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8135 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8136 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8137 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8138 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8139 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8140 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8141 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8142 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8143 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8144 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8145 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8146 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8147 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8148 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8149 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8150 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8151 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8152 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8153 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8154 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8155 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8156 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8157 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8158 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8159 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8160 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8161 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8162 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8163 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8164 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8165 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8166 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8167 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8168 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8169 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8170 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8171 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8172 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8173 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8174 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8175 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8176 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8177 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8178 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8179 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
			8180 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8181 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8182 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8183 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8184 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8185 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8186 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8187 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8188 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8189 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8190 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8191 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8192 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8193 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8194 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8195 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8196 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8197 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8198 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8199 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8200 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8201 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8202 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8203 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8204 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8205 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8206 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8207 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8208 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8209 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8210 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8211 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8212 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8213 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8214 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8215 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8216 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8217 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8218 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8219 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8220 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8221 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8222 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8223 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8224 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8225 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8226 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8227 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8228 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8229 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8230 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8231 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8232 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8233 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8234 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8235 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
			8236 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8237 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8238 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8239 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8240 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8241 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8242 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8243 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8244 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8245 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8246 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8247 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8248 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8249 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8250 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8251 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8252 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8253 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8254 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8255 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8256 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8257 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8258 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8259 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8260 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8261 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8262 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8263 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8264 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8265 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8266 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8267 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8268 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8269 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8270 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8271 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8272 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8273 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8274 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8275 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8276 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8277 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8278 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8279 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8280 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8281 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8282 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8283 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8284 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8285 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8286 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8287 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8288 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8289 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8290 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8291 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
			8292 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8293 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8294 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8295 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8296 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8297 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8298 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8299 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8300 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8301 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8302 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8303 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8304 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8305 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8306 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8307 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8308 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8309 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8310 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8311 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8312 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8313 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8314 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8315 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8316 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8317 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8318 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8319 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8320 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8321 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8322 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8323 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8324 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8325 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8326 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8327 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8328 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8329 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8330 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8331 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8332 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8333 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8334 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8335 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8336 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8337 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8338 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8339 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8340 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8341 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8342 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8343 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8344 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8345 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8346 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
			8347 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8348 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8349 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8350 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8351 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8352 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8353 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8354 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8355 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8356 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8357 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8358 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8359 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8360 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8361 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8362 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8363 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8364 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8365 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8366 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8367 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8368 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8369 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8370 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8371 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8372 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8373 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8374 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8375 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8376 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8377 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8378 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8379 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8380 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8381 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8382 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8383 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8384 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8385 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8386 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8387 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8388 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8389 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8390 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8391 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8392 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8393 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8394 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8395 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8396 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8397 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8398 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8399 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8400 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8401 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
			8402 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8403 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8404 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8405 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8406 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8407 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8408 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8409 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8410 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8411 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8412 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8413 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8414 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8415 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8416 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8417 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8418 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8419 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8420 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8421 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8422 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8423 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8424 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8425 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8426 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8427 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8428 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8429 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8430 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8431 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8432 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8433 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8434 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8435 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8436 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8437 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8438 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8439 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8440 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8441 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8442 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8443 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8444 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8445 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8446 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8447 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8448 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8449 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8450 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8451 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8452 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8453 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8454 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8455 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
			8456 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8457 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8458 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8459 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8460 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8461 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8462 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8463 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8464 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8465 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8466 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8467 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8468 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8469 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8470 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8471 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8472 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8473 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8474 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8475 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8476 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8477 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8478 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8479 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8480 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8481 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8482 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8483 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8484 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8485 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8486 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8487 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8488 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8489 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8490 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8491 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8492 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8493 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8494 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8495 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8496 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8497 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8498 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8499 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8500 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8501 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8502 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8503 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8504 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8505 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8506 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8507 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8508 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8509 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
			8510 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8511 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8512 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8513 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8514 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8515 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8516 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8517 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8518 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8519 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8520 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8521 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8522 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8523 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8524 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8525 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8526 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8527 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8528 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8529 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8530 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8531 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8532 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8533 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8534 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8535 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8536 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8537 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8538 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8539 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8540 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8541 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8542 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8543 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8544 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8545 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8546 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8547 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8548 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8549 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8550 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8551 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8552 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8553 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8554 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8555 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8556 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8557 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8558 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8559 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8560 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8561 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8562 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8563 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8564 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8565 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8566 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
			8567 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8568 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8569 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8570 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8571 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8572 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8573 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8574 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8575 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8576 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8577 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8578 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8579 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8580 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8581 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8582 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8583 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8584 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8585 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8586 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8587 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8588 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8589 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8590 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8591 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8592 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8593 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8594 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8595 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8596 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8597 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8598 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8599 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8600 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8601 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8602 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8603 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8604 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8605 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8606 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8607 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8608 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8609 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8610 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8611 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8612 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8613 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8614 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8615 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8616 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8617 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8618 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8619 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8620 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8621 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8622 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8623 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
			8624 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8625 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8626 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8627 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8628 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8629 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8630 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8631 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8632 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8633 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8634 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8635 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8636 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8637 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8638 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8639 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8640 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8641 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8642 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8643 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8644 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8645 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8646 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8647 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8648 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8649 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8650 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8651 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8652 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8653 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8654 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8655 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8656 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8657 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8658 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8659 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8660 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8661 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8662 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8663 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8664 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8665 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8666 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8667 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8668 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8669 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8670 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8671 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8672 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8673 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8674 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8675 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8676 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8677 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8678 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8679 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8680 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
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
			8681 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8682 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8683 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8684 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8685 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8686 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8687 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8688 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8689 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8690 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8691 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8692 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8693 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8694 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8695 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8696 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8697 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8698 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8699 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8700 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8701 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8702 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8703 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8704 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8705 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8706 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8707 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8708 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8709 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8710 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8711 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8712 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8713 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8714 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8715 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8716 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8717 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8718 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8719 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8720 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8721 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8722 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8723 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8724 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8725 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8726 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8727 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8728 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8729 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8730 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8731 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8732 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8733 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8734 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8735 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8736 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8737 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
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
			8738 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8739 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8740 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8741 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8742 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8743 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8744 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8745 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8746 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8747 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8748 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8749 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8750 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8751 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8752 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8753 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8754 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8755 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8756 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8757 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8758 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8759 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8760 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8761 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8762 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8763 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8764 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8765 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8766 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8767 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8768 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8769 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8770 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8771 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8772 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8773 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8774 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8775 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8776 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8777 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8778 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8779 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8780 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8781 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8782 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8783 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8784 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8785 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8786 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8787 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8788 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8789 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8790 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8791 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8792 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8793 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8794 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
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
			8795 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8796 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8797 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8798 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8799 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8800 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8801 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8802 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8803 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8804 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8805 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8806 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8807 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8808 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8809 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8810 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8811 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8812 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8813 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8814 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8815 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8816 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8817 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8818 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8819 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8820 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8821 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8822 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8823 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8824 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8825 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8826 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8827 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8828 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8829 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8830 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8831 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8832 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8833 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8834 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8835 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8836 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8837 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8838 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8839 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8840 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8841 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8842 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8843 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8844 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8845 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8846 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8847 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8848 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8849 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8850 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8851 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
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
			8852 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8853 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8854 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8855 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8856 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8857 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8858 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8859 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8860 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8861 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8862 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8863 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8864 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8865 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8866 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8867 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8868 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8869 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8870 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8871 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8872 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8873 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8874 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8875 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8876 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8877 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8878 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8879 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8880 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8881 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8882 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8883 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8884 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8885 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8886 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8887 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8888 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8889 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8890 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8891 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8892 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8893 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8894 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8895 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8896 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8897 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8898 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8899 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8900 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8901 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8902 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8903 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8904 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8905 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8906 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8907 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8908 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
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
			8909 => [
				'constraint'                 => $constraint = new IsKeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
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
			8910 => [
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
			8911 => [
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
			8912 => [
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
			8913 => [
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
			8914 => [
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
			8915 => [
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
			8916 => [
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
			8917 => [
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
			8918 => [
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
			8919 => [
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
			8920 => [
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
			8921 => [
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
			8922 => [
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
			8923 => [
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
			8924 => [
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
			8925 => [
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
			8926 => [
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
			8927 => [
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
			8928 => [
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
			8929 => [
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
			8930 => [
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
			8931 => [
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
			8932 => [
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
			8933 => [
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
			8934 => [
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
			8935 => [
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
			8936 => [
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
			8937 => [
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
			8938 => [
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
			8939 => [
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
			8940 => [
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
			8941 => [
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
			8942 => [
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
			8943 => [
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
			8944 => [
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
			8945 => [
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
			8946 => [
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
			8947 => [
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
			8948 => [
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
			8949 => [
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
			8950 => [
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
			8951 => [
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
			8952 => [
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
			8953 => [
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
			8954 => [
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
			8955 => [
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
			8956 => [
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
			8957 => [
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
			8958 => [
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
			8959 => [
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
			8960 => [
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
			8961 => [
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
			8962 => [
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
			8963 => [
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
			8964 => [
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
			8965 => [
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
			8966 => [
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
			8967 => [
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
			8968 => [
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
			8969 => [
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
			8970 => [
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
			8971 => [
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
			8972 => [
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
			8973 => [
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
			8974 => [
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
			8975 => [
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
			8976 => [
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
			8977 => [
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
			8978 => [
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
			8979 => [
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
			8980 => [
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
			8981 => [
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
			8982 => [
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
			8983 => [
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
			8984 => [
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
			8985 => [
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
			8986 => [
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
			8987 => [
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
			8988 => [
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
			8989 => [
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
			8990 => [
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
			8991 => [
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
			8992 => [
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
			8993 => [
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
			8994 => [
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
			8995 => [
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
			8996 => [
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
			8997 => [
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
			8998 => [
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
			8999 => [
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
			]
		];
	}
}
