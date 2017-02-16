<?php
/**
 * Contains \Intelisys\PhpEws\Enumeration\ReminderActionType.
 */

namespace Intelisys\PhpEws\Enumeration;

use \Intelisys\PhpEws\Enumeration;

/**
 * Defines the action to take on a reminder.
 *
 * @package php-ews\Enumeration
 */
class ReminderActionType extends Enumeration
{
    /**
     * Dismiss the reminder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DISMISS = 'Dismiss';

    /**
     * Snooze the reminder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SNOOZE = 'Snooze';
}
