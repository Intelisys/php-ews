<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfStringArrayAttributedValuesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Specifies an array of string data and identifiers of their source
 * attributions.
 *
 * @package php-ews\Array
 */
class ArrayOfStringArrayAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of string data.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\StringArrayAttributedValueType[]
     */
    public $StringArrayAttributedValue = array();
}
