<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfBodyContentAttributedValuesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of BodyContentAttributedValue elements.
 *
 * @package php-ews\Array
 */
class ArrayOfBodyContentAttributedValuesType extends ArrayType
{
    /**
     * Specifies the body content of an item.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\BodyContentAttributedValueType[]
     */
    public $BodyContentAttributedValue = array();
}
