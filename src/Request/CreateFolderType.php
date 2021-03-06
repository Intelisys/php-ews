<?php
/**
 * Contains \Intelisys\PhpEws\Request\CreateFolderType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to create a folder in the Exchange store.
 *
 * @package php-ews\Request
 */
class CreateFolderType extends BaseRequestType
{
    /**
     * The element that contains all the folders to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfFoldersType
     */
    public $Folders;

    /**
     * The element that identifies the location where the new folder is created.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TargetFolderIdType
     */
    public $ParentFolderId;
}
