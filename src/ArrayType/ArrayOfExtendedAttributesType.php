<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfExtendedAttributesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Internal use only.
 *
 * @package php-ews\Array
 */
class ArrayOfExtendedAttributesType extends ArrayType
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ExtendedAttributeType[]
     */
    public $ExtendedAttribute = array();
}
