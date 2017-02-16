<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfConversationNodesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a collection of conversation nodes.
 *
 * @package php-ews\Array
 */
class ArrayOfConversationNodesType extends ArrayType
{
    /**
     * Specifies a node in a conversation.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ConversationNodeType
     */
    public $ConversationNode = array();
}
