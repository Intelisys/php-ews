<?php
/**
 * Contains \Intelisys\PhpEws\Type\SyncFolderItemsDeleteType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies a single item to delete in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderItemsDeleteType extends Type
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
