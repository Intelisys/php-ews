<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRemindersType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents the reminders returned in the response to a GetReminders request.
 *
 * @package php-ews\Array
 */
class ArrayOfRemindersType extends ArrayType
{
    /**
     * Specifies a reminder for a task or a calendar item.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ReminderType[]
     */
    public $Reminder = array();
}
