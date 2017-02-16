<?php
/**
 * Contains \Intelisys\PhpEws\Request\AddDelegateType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to add delegates to a mailbox.
 *
 * @package php-ews\Request
 */
class AddDelegateType extends BaseDelegateType
{
    /**
     * Contains the identities of delegates to add to or update in a mailbox.
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
