<?php
/**
 * Contains \Intelisys\PhpEws\Request\UpdateFolderType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents the operation that is used to update properties for a specified
 * folder.
 *
 * @package php-ews\Request
 */
class UpdateFolderType extends BaseRequestType
{
    /**
     * Contains a collection of changes for a specified folder.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
