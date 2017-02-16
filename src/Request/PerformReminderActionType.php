<?php
/**
 * Contains \Intelisys\PhpEws\Request\PerformReminderActionType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to perform a reminder action.
 *
 * @package php-ews\Request
 */
class PerformReminderActionType extends BaseRequestType
{
    /**
     * Specifies the actions for reminder items.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfReminderItemActionType
     */
    public $ReminderItemActions;
}
