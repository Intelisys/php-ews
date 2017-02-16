<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetHoldOnMailboxesType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to get the hold status for a mailbox.
 *
 * @package php-ews\Request
 */
class GetHoldOnMailboxesType extends BaseRequestType
{
    /**
     * Contains the mailbox hold identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $HoldId;
}
