<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFolderChangesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a collection of changes for a folder.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFolderChangesType extends ArrayType
{
    /**
     * Represents a single change to be performed on a single folder.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderChangeType[]
     */
    public $FolderChange = array();
}
