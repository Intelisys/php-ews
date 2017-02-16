<?php
/**
 * Contains \Intelisys\PhpEws\Request\UpdateDelegateType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to update delegates in a mailbox.
 *
 * @package php-ews\Request
 */
class UpdateDelegateType extends BaseDelegateType
{
    /**
     * Contains an array of DelegateUser elements that identify the delegates
     * and the updates to apply to the delegates.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfDelegateUserType
     */
    public $DelegateUsers;

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
