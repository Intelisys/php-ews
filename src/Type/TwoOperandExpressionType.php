<?php
/**
 * Contains \Intelisys\PhpEws\Type\TwoOperandExpressionType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Base class for search expressions with two operands.
 *
 * @package php-ews\Type
 */
abstract class TwoOperandExpressionType extends SearchExpressionType
{
    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
