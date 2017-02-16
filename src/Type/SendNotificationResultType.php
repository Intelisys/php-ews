<?php
/**
 * Contains \Intelisys\PhpEws\Type\SendNotificationResultType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Defines the response of a client application to a push notification.
 *
 * @package php-ews\Type
 */
class SendNotificationResultType extends Type
{
    /**
     * Describes the status of a push subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\SubscriptionStatusType
     */
    public $SubscriptionStatus;
}
