<?php
/**
 * Contains \Intelisys\PhpEws\Type\GroupedItemsType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a collection of items that are the result of a grouped FindItem
 * operation call.
 *
 * @package php-ews\Type
 */
class GroupedItemsType extends Type
{
    /**
     * Represents the property value that is used to group items in a grouped
     * FindItem operation call.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $GroupIndex;

    /**
     * Contains an array of grouped items.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfRealItemsType
     */
    public $Items;
}
