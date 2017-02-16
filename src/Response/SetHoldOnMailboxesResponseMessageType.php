<?php
/**
 * Contains \Intelisys\PhpEws\Response\SetHoldOnMailboxesResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to a SetHoldOnMailboxes request.
 *
 * @package php-ews\Response
 */
class SetHoldOnMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\MailboxHoldResultType
     */
    public $MailboxHoldResult;
}
