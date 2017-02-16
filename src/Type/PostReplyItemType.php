<?php
/**
 * Contains \Intelisys\PhpEws\Type\PostReplyItemType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents a reply to a post item.
 *
 * @package php-ews\Type
 */
class PostReplyItemType extends PostReplyItemBaseType
{
    /**
     * Represents the new body content of a post item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\BodyType
     */
    public $NewBodyContent;
}
