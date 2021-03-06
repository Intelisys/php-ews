<?php
/**
 * Contains \Intelisys\PhpEws\Type\ItemAttachmentType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents an Exchange item that is attached to another Exchange item.
 *
 * @package php-ews\Type
 */
class ItemAttachmentType extends AttachmentType
{
    /**
     * Represents an Exchange calendar item attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Represents a generic Exchange item attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MessageType
     */
    public $Message;

    /**
     * Represents a post item in the Exchange store.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\PostItemType
     */
    public $PostItem;

    /**
     * Represents an Exchange task attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TaskType
     */
    public $Task;
}
