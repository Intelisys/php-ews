<?php
/**
 * Contains \Intelisys\PhpEws\Type\RequestAttachmentIdType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Identifies a single attachment.
 *
 * @package php-ews\Type
 */
class RequestAttachmentIdType extends BaseItemIdType
{
    /**
     * Specifies the attachment identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Id;
}
