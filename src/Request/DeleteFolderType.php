<?php
/**
 * Contains \Intelisys\PhpEws\Request\DeleteFolderType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to delete folders from a mailbox in the Exchange store.
 *
 * @package php-ews\Request
 */
class DeleteFolderType extends BaseRequestType
{
    /**
     * Describes how a folder is deleted. This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DisposalType
     */
    public $DeleteType;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to delete.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
