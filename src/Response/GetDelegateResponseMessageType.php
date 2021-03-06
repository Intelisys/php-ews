<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetDelegateResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a GetDelegate operation request.
 *
 * @package php-ews\Response
 */
class GetDelegateResponseMessageType extends BaseDelegateResponseMessageType
{
    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
