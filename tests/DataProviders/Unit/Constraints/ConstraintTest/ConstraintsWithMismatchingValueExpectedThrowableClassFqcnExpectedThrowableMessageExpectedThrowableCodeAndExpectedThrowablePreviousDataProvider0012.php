<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;

/**
 * Represents a data provider providing constraints with mismatching value, expected throwable class FQCN, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithMismatchingValueExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0012 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
	12000 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12001 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12002 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12003 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12004 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12005 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12006 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12007 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12008 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12009 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12010 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12011 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12012 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12013 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12014 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12015 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12016 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12017 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12018 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12019 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12020 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12021 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12022 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12023 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12024 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12025 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
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
	12026 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12027 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12028 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12029 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12030 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12031 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12032 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12033 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12034 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12035 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12036 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12037 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12038 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12039 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12040 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12041 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12042 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12043 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12044 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12045 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12046 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12047 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12048 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12049 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12050 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12051 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12052 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12053 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12054 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12055 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12056 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12057 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12058 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12059 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12060 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12061 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12062 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12063 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12064 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12065 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12066 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12067 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12068 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12069 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12070 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
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
	12071 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12072 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12073 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12074 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12075 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12076 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12077 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12078 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12079 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12080 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12081 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12082 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12083 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12084 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12085 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12086 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12087 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12088 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12089 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12090 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12091 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12092 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12093 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12094 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12095 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12096 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12097 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12098 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12099 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12100 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12101 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12102 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12103 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12104 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12105 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12106 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12107 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12108 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12109 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12110 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12111 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12112 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12113 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12114 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12115 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12116 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12117 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
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
	12118 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12119 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12120 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12121 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12122 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12123 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12124 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12125 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12126 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12127 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12128 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12129 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12130 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12131 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12132 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12133 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12134 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12135 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12136 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12137 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12138 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12139 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12140 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12141 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12142 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12143 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12144 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12145 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12146 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12147 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12148 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12149 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12150 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12151 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12152 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12153 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12154 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12155 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12156 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
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
	12157 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12158 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12159 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12160 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12161 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12162 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12163 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12164 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12165 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12166 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12167 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12168 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12169 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12170 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12171 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12172 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12173 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12174 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12175 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12176 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12177 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12178 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12179 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12180 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12181 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12182 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12183 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12184 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12185 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12186 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12187 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12188 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12189 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12190 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12191 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12192 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12193 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12194 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12195 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12196 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12197 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
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
	12198 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12199 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12200 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12201 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12202 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12203 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12204 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12205 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12206 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12207 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12208 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12209 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12210 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12211 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12212 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12213 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12214 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12215 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12216 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12217 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12218 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12219 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12220 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12221 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12222 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12223 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12224 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12225 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12226 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12227 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12228 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12229 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12230 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12231 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12232 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12233 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12234 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12235 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12236 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12237 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12238 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12239 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12240 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
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
	12241 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12242 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12243 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12244 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12245 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12246 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12247 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12248 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12249 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12250 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12251 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12252 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12253 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12254 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12255 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12256 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12257 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12258 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12259 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12260 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12261 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12262 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12263 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12264 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12265 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12266 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12267 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12268 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12269 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12270 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12271 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12272 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12273 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12274 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12275 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12276 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12277 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12278 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12279 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12280 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12281 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12282 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12283 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12284 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12285 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
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
	12286 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12287 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12288 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12289 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12290 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12291 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12292 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12293 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12294 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12295 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12296 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12297 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12298 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12299 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12300 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12301 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12302 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12303 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12304 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12305 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12306 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12307 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12308 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12309 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12310 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12311 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12312 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12313 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12314 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12315 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12316 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12317 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12318 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12319 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12320 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12321 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12322 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12323 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12324 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12325 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12326 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12327 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12328 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12329 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12330 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12331 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12332 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12333 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12334 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12335 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12336 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12337 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12338 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12339 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12340 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12341 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12342 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12343 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
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
	12344 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12345 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12346 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12347 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12348 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12349 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12350 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12351 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12352 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12353 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12354 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12355 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12356 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12357 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12358 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12359 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12360 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12361 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12362 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12363 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12364 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12365 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12366 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12367 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12368 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12369 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12370 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12371 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12372 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12373 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12374 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12375 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12376 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12377 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12378 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12379 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12380 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12381 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12382 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12383 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12384 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12385 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12386 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12387 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12388 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12389 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12390 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12391 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12392 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12393 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12394 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12395 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12396 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12397 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12398 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12399 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12400 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12401 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
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
	12402 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12403 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12404 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12405 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12406 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12407 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12408 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12409 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12410 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12411 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12412 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12413 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12414 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12415 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12416 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12417 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12418 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12419 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12420 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12421 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12422 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12423 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12424 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12425 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12426 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12427 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12428 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12429 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12430 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12431 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12432 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12433 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12434 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12435 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12436 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12437 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12438 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12439 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12440 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12441 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12442 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12443 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12444 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12445 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12446 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12447 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12448 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12449 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12450 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12451 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12452 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12453 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12454 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12455 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12456 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
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
	12457 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12458 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12459 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12460 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12461 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12462 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12463 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12464 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12465 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12466 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12467 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12468 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12469 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12470 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12471 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12472 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12473 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12474 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12475 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12476 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12477 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12478 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12479 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12480 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12481 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12482 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12483 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12484 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12485 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12486 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12487 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12488 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12489 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12490 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12491 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12492 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12493 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12494 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12495 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12496 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12497 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12498 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12499 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12500 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12501 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12502 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12503 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12504 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12505 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12506 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12507 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12508 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12509 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12510 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12511 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
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
	12512 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12513 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12514 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12515 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12516 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12517 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12518 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12519 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12520 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12521 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12522 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12523 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12524 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12525 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12526 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12527 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12528 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12529 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12530 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12531 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12532 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12533 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12534 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12535 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12536 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12537 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12538 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12539 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12540 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12541 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12542 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12543 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12544 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12545 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12546 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12547 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12548 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12549 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12550 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12551 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12552 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12553 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12554 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12555 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12556 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12557 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12558 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12559 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12560 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12561 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12562 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12563 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12564 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
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
	12565 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12566 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12567 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12568 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12569 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12570 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12571 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12572 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12573 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12574 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12575 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12576 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12577 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12578 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12579 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12580 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12581 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12582 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12583 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12584 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12585 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12586 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12587 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12588 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12589 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12590 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12591 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12592 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12593 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12594 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12595 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12596 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12597 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12598 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12599 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12600 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12601 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12602 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12603 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12604 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12605 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12606 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12607 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12608 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12609 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12610 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12611 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12612 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12613 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12614 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12615 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12616 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12617 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
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
	12618 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12619 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12620 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12621 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12622 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12623 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12624 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12625 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12626 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12627 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12628 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12629 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12630 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12631 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12632 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12633 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12634 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12635 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12636 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12637 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12638 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12639 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12640 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12641 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12642 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12643 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12644 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12645 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12646 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12647 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12648 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12649 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12650 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12651 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12652 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12653 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12654 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12655 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12656 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12657 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12658 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12659 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12660 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12661 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12662 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12663 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12664 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12665 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12666 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12667 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12668 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12669 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12670 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12671 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12672 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12673 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
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
	12674 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12675 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12676 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12677 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12678 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12679 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12680 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12681 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12682 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12683 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12684 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12685 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12686 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12687 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12688 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12689 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12690 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12691 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12692 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12693 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12694 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12695 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12696 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12697 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12698 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12699 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12700 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12701 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12702 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12703 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12704 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12705 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12706 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12707 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12708 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12709 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12710 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12711 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12712 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12713 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12714 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12715 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12716 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12717 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12718 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12719 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12720 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12721 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12722 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12723 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12724 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12725 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12726 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12727 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12728 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12729 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
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
	12730 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12731 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12732 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12733 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12734 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12735 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12736 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12737 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12738 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12739 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12740 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12741 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12742 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12743 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12744 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12745 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12746 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12747 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12748 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12749 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12750 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12751 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12752 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12753 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12754 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12755 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12756 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12757 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12758 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12759 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12760 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12761 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12762 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12763 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12764 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12765 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12766 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12767 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12768 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12769 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12770 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12771 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12772 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12773 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12774 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12775 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12776 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12777 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12778 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12779 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12780 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12781 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12782 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12783 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12784 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
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
	12785 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12786 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12787 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12788 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12789 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12790 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12791 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12792 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12793 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12794 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12795 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12796 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12797 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12798 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12799 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12800 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12801 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12802 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12803 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12804 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12805 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12806 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12807 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12808 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12809 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12810 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12811 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12812 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12813 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12814 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12815 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12816 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12817 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12818 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12819 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12820 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12821 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12822 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12823 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12824 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12825 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12826 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12827 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12828 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12829 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12830 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12831 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12832 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12833 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12834 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12835 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12836 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12837 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12838 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12839 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
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
	12840 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12841 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12842 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12843 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12844 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12845 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12846 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12847 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12848 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12849 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12850 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12851 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12852 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12853 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12854 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12855 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12856 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12857 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12858 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12859 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12860 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12861 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12862 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12863 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12864 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12865 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12866 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12867 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12868 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12869 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12870 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12871 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12872 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12873 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12874 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12875 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12876 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12877 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12878 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12879 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12880 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12881 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12882 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12883 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12884 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12885 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12886 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12887 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12888 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12889 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12890 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
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
	12891 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12892 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12893 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12894 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12895 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12896 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12897 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12898 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12899 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12900 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12901 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12902 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12903 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12904 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12905 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12906 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12907 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12908 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12909 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12910 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12911 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12912 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12913 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12914 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12915 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12916 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12917 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12918 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12919 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12920 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12921 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12922 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12923 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12924 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12925 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12926 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12927 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12928 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12929 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12930 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12931 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12932 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12933 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12934 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12935 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12936 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12937 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12938 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12939 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12940 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12941 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
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
	12942 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12943 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12944 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12945 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12946 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12947 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12948 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12949 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12950 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12951 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12952 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12953 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12954 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12955 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12956 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12957 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12958 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12959 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12960 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12961 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12962 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12963 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12964 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12965 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12966 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12967 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12968 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12969 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12970 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12971 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12972 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12973 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12974 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12975 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12976 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12977 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12978 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12979 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12980 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12981 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12982 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12983 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12984 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12985 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12986 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12987 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12988 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12989 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12990 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12991 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12992 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12993 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12994 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12995 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12996 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
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
	12997 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
	12998 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
	12999 => [
		'constraint'                 => $constraint = new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
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
	]
		];
	}

}
