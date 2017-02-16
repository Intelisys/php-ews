<?php
/**
 * Contains \Intelisys\PhpEws\Type\SyncFolderItemsCreateOrUpdateType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies a single item to create in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderItemsCreateOrUpdateType extends Type
{
    /**
     * Represents an Exchange calendar item to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DistributionListType
     */
    public $DistributionList;

    /**
     * Represents a generic Exchange item to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MessageType
     */
    public $Message;

    /**
     * Represents an Exchange post to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PostItemType
     */
    public $PostItem;

    /**
     * Represents a task to create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TaskType
     */
    public $Task;
}
