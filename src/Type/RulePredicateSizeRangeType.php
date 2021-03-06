<?php
/**
 * Contains \Intelisys\PhpEws\Type\RulePredicateSizeRangeType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Specifies the minimum and maximum sizes that incoming messages must be in
 * order for the condition or exception to apply.
 *
 * @package php-ews\Type
 */
class RulePredicateSizeRangeType extends Type
{
    /**
     * Specifies the maximum size that a message must be in order for the
     * condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MaximumSize;

    /**
     * Specifies the minimum size that a message must be in order for the
     * condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MinimumSize;
}
