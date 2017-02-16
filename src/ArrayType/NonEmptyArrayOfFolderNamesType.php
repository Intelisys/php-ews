<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFolderNamesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of named managed folders to add to a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFolderNamesType extends ArrayType
{
    /**
     * Identifies a single managed folder to add to mailbox.
     *
     * @since Exchange 2007
     *
     * @var string[]
     */
    public $FolderName = array();
}
