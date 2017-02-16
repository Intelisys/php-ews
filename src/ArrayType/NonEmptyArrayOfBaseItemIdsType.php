<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents the unique identities of items, occurrence items, and recurring
 * master items that are used to delete, send, get, move, or copy items in the
 * Exchange store.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfBaseItemIdsType extends ArrayType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType[]
     */
    public $ItemId = array();

    /**
     * Identifies a single occurrence of a recurring item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\OccurrenceItemIdType[]
     */
    public $OccurrenceItemId = array();

    /**
     * Identifies a recurrence master item by identifying one of its related
     * occurrence items' identifiers.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\RecurringMasterItemIdType[]
     */
    public $RecurringMasterItemId = array();

    /**
     * Specifies an array of occurrence ranges.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\RecurringMasterItemIdRanges[]
     */
    public $RecurringMasterItemIdRanges = array();
}
