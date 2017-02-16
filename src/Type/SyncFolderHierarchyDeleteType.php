<?php
/**
 * Contains \Intelisys\PhpEws\Type\SyncFolderHierarchyDeleteType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies a single folder to delete in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderHierarchyDeleteType extends Type
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType
     */
    public $FolderId;
}
