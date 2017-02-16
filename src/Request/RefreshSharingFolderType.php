<?php
/**
 * Contains \Intelisys\PhpEws\Request\RefreshSharingFolderType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to refresh the specified local folder.
 *
 * @package php-ews\Request
 */
class RefreshSharingFolderType extends BaseRequestType
{
    /**
     * Represents the identifier of the local folder in a sharing relationship.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType
     */
    public $SharingFolderId;
}
