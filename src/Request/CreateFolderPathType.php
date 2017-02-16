<?php
/**
 * Contains \Intelisys\PhpEws\Request\CreateFolderPathType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to create a folder path.
 *
 * @package php-ews\Request
 */
class CreateFolderPathType extends BaseRequestType
{
    /**
     * Identifies the folder in which a new folder is created.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Contains an array of folders that indicate the relative folder path of
     * the folder path to be created.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFoldersType
     */
    public $RelativeFolderPath;
}
