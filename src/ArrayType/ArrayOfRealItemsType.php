<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRealItemsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of items.
 *
 * @package php-ews\Array
 */
class ArrayOfRealItemsType extends ArrayType
{
    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarItemType[]
     */
    public $CalendarItem = array();

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ContactItemType[]
     */
    public $Contact = array();

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DistributionListType[]
     */
    public $DistributionList = array();

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ItemType[]
     */
    public $Item = array();

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingCancellationMessageType[]
     */
    public $MeetingCancellation = array();

    /**
     * Represents a meeting message in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingMessageType[]
     */
    public $MeetingMessage = array();

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingRequestMessageType[]
     */
    public $MeetingRequest = array();

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MeetingResponseMessageType[]
     */
    public $MeetingResponse = array();

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MessageType[]
     */
    public $Message = array();

    /**
     * Represents a post item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PostItemType[]
     */
    public $PostItem = array();

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TaskType[]
     */
    public $Task = array();
}
