<?php
/**
 * Contains \Intelisys\PhpEws\Type\ContainsExpressionType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents a search expression that determines whether a given property
 * contains the supplied constant string value.
 *
 * @package php-ews\Type
 */
class ContainsExpressionType extends SearchExpressionType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ConstantValueType
     */
    public $Constant;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\ContainmentComparisonType
     */
    public $ContainmentComparison;

    /**
     * Identifies the boundaries of a search.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\ContainmentModeType
     */
    public $ContainmentMode;
}
