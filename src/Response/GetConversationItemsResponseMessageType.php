<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetConversationItemsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response message for a GetConversationItems request.
 *
 * @package php-ews\Response
 */
class GetConversationItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ConversationResponseType
     */
    public $Conversation;
}
