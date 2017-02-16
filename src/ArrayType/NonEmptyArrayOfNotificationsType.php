<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfNotificationsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of information about the subscription and the events that
 * have occurred since the last notification.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfNotificationsType extends ArrayType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\Type\NotificationType[]
     */
    public $Notification = array();
}
