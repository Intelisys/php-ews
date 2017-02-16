<?php
/**
 * Contains \Intelisys\PhpEws\Request\ApplyConversationActionType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Request
 */
class ApplyConversationActionType extends BaseRequestType
{
    /**
     * Contains a collection of conversations and the actions to apply to them.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfApplyConversationActionType
     */
    public $ConversationActions;
}
