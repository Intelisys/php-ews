<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfExtendedPropertyAttributedValueType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines the extended properties used for a persona.
 *
 * @package php-ews\Array
 */
class ArrayOfExtendedPropertyAttributedValueType extends ArrayType
{
    /**
     * Specifies extended properties for a persona.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ExtendedPropertyAttributedValueType[]
     */
    public $ExtendedPropertyAttributedValue = array();
}
