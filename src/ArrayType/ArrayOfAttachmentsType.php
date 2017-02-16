<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfAttachmentsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use Intelisys\PhpEws\ArrayType;

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package php-ews\Type
 *
 * @todo Figure out how to handle array classes.
 */
class ArrayOfAttachmentsType extends ArrayType
{
    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FileAttachmentType[]
     */
    public $FileAttachment;

    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ItemAttachmentType[]
     */
    public $ItemAttachment;
}
