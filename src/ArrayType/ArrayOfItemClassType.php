<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfItemClassType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a list of item classes.
 *
 * @package php-ews\Array
 */
class ArrayOfItemClassType extends ArrayType
{
    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2010 SP1
     *
     * @var string[]
     *
     * @see \Intelisys\PhpEws\Enumeration\ItemClassType[]
     */
    public $ItemClass = array();
}
