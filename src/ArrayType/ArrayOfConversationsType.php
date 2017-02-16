<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfConversationsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of conversations.
 *
 * @package php-ews\Array
 */
class ArrayOfConversationsType extends ArrayType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\Type\ConversationType[]
     */
    public $Conversation = array();
}
