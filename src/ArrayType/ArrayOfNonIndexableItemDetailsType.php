<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfNonIndexableItemDetailsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of item details for non-indexable items.
 *
 * @package php-ews\Array
 */
class ArrayOfNonIndexableItemDetailsType extends ArrayType
{
    /**
     * Specifies detail information about an item that cannot be indexed.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\NonIndexableItemDetailType[]
     */
    public $NonIndexableItemDetail = array();
}
