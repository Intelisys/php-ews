<?php
/**
 * Contains \Intelisys\PhpEws\Type\FolderChangeType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a collection of changes to be performed on a single folder.
 *
 * @package php-ews\Type
 */
class FolderChangeType extends Type
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced by
     * name.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of a folder to update.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType
     */
    public $FolderId;

    /**
     * Defines the type of update that is performed on a folder that is
     * identified by either the FolderId or DistinguishedFolderId element.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
