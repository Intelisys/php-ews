<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfUploadItemsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of items to upload into a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfUploadItemsType extends ArrayType
{
    /**
     * Represents a single item to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\Type\UploadItemType[]
     */
    public $Item = array();
}
