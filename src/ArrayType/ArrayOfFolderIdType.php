<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfFolderIdType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a list of folder identifiers.
 *
 * @package php-ews\Array
 */
class ArrayOfFolderIdType extends ArrayType
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType[]
     */
    public $FolderId = array();
}
