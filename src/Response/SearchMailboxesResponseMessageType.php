<?php
/**
 * Contains \Intelisys\PhpEws\Response\SearchMailboxesResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response message for a SearchMailboxes request.
 *
 * @package php-ews\Response
 */
class SearchMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\SearchMailboxesResultType
     */
    public $SearchMailboxesResult;
}
