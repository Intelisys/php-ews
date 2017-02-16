<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of attachment identifiers.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfRequestAttachmentIdsType extends ArrayType
{
    /**
     * The element that identifies a single attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\RequestAttachmentIdType[]
     */
    public $AttachmentId = array();
}
