<?php
/**
 * Contains \Intelisys\PhpEws\Response\SendNotificationResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single SendNotification operation
 * request.
 *
 * @package php-ews\Response
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\NotificationType
     */
    public $Notification;
}
