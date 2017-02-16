<?php
/**
 * Contains \Intelisys\PhpEws\Request\UploadItemsType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to upload items into a mailbox.
 *
 * @package php-ews\Request
 */
class UploadItemsType extends BaseRequestType
{
    /**
     * Contains an array of items to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfUploadItemsType
     */
    public $Items;
}
