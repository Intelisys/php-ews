<?php
/**
 * Contains \Intelisys\PhpEws\Type\SyncFolderHierarchyCreateOrUpdateType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies a single folder to create in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a contact folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Defines the folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FolderType
     */
    public $Folder;

    /**
     * Represents a search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a task folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TasksFolderType
     */
    public $TasksFolder;
}
