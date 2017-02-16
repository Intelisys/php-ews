<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfReminderItemActionType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines the actions for reminder items.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfReminderItemActionType extends ArrayType
{
    /**
     * Specifies the action for a reminder item.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ReminderItemActionType
     */
    public $ReminderItemAction = array();
}
