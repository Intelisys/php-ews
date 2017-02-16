<?php
/**
 * Contains \Intelisys\PhpEws\Type\OrType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents a search expression that performs a logical OR on the search
 * expression that it contains.
 *
 * Or will return true if any of its children return true. Or must have two or
 * more children.
 *
 * @package php-ews\Type
 */
class OrType extends MultipleOperandBooleanExpressionType
{

}
