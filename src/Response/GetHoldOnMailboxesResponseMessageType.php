<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetHoldOnMailboxesResponse.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to get the hold status for a mailbox.
 *
 * @package php-ews\Response
 */
class GetHoldOnMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the GetHoldOnMailboxes request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\MailboxHoldResultType
     */
    public $MailboxHoldResult;
}
