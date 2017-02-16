<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfExtendedPropertyType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * An array of additional properties.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfExtendedPropertyType extends ArrayType
{
    /**
     * Identifies extended MAPI properties on folders and items.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ExtendedPropertyType[]
     */
    public $ExtendedProperty = array();
}
