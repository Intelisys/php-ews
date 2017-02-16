<?php
/**
 * Contains \Intelisys\PhpEws\Response\FindConversationResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to a FindConversation Operation request.
 *
 * @package php-ews\Response
 */
class FindConversationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of conversations.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfConversationsType
     */
    public $Conversations;
}
