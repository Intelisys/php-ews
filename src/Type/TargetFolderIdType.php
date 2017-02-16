<?php
/**
 * Contains \Intelisys\PhpEws\Type\TargetFolderIdType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Indicates the folder that is targeted for actions that use folders.
 *
 * @package php-ews\Type
 */
class TargetFolderIdType extends Type
{
    /**
     * Specifies the identifier of an address list.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\AddressListIdType
     */
    public $AddressListId;

    /**
     * Identifies folders that can be referenced by name.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of the context folder.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType
     */
    public $FolderId;
}
