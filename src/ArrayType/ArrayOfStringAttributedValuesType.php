<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfStringAttributedValuesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of names and the identifiers of their source attributions
 * for the associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfStringAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance in an array of attributes associated with a persona
     * element.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\StringAttributedValueType[]
     */
    public $StringAttributedValue = array();
}
