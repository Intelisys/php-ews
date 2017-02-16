<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPropertyValuesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a collection of values for an extended property.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfPropertyValuesType extends ArrayType
{
    /**
     * Contains a value of an extended property.
     *
     * @since Exchange 2007
     *
     * @var string[]
     */
    public $Value = array();
}
