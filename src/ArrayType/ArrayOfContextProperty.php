<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfContextProperty.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a set of context properties for an item.
 *
 * @package php-ews\Array
 */
class ArrayOfContextProperty extends ArrayType
{
    /**
     * Specifies the context of an item.
     *
     * @since Exchange 2016
     *
     * @var \Intelisys\PhpEws\Type\ContextPropertyType[]
     */
    public $ContextProperty = array();
}
