<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFoldersType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFoldersType extends ArrayType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarFolderType[]
     */
    public $CalendarFolder = array();

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ContactsFolderType[]
     */
    public $ContactsFolder = array();

    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderType[]
     */
    public $Folder = array();

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\SearchFolderType[]
     */
    public $SearchFolder = array();

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TasksFolderType[]
     */
    public $TasksFolder = array();
}
