<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents the collection of folders that will be mined to determine the
 * contents of a search folder.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfBaseFolderIdsType extends ArrayType
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced
     * by name.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DistinguishedFolderIdType[]
     */
    public $DistinguishedFolderId = array();

    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType[]
     */
    public $FolderId = array();
}
