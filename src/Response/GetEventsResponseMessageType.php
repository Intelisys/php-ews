<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetEventsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single GetEvents operation request.
 *
 * @package php-ews\Response
 */
class GetEventsResponseMessageType extends ResponseMessageType
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
