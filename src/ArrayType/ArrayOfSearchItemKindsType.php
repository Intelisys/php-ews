<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfSearchItemKindsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of messages to search.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchItemKindsType extends ArrayType
{
    /**
     * Indicates an item type to be searched.
     *
     * @since Exchange 2013
     *
     * @var string[]
     *
     * @see \Intelisys\PhpEws\Enumeration\SearchItemKindType[]
     */
    public $SearchItemKind = array();
}
