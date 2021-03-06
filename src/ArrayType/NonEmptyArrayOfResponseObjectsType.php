<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfResponseObjectsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a collection of all the response objects that are associated with
 * an item in the Exchange store.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfResponseObjectsType extends ArrayType
{
    /**
     * Represents an Accept reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\AcceptItemType[]
     */
    public $AcceptItem = array();

    /**
     * Used to accept an invitation that allows access to another user’s
     * calendar or contacts data.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\AcceptSharingInvitationType[]
     */
    public $AcceptSharingInvitation = array();

    /**
     * Represents the response object used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarItemType[]
     */
    public $CancelCalendarItem = array();

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DeclineItemType[]
     */
    public $DeclineItem = array();

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ForwardItemType[]
     */
    public $ForwardItem = array();

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\PostReplyItemType[]
     */
    public $PostReplyItem = array();

    /**
     * Removes an item from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\RemoveItemType[]
     */
    public $RemoveItem = array();

    /**
     * Contains a reply to all identified recipients of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ReplyAllToItemType[]
     */
    public $ReplyAllToItem = array();

    /**
     * Contains a reply to the creator of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ReplyToItemType[]
     */
    public $ReplyToItem = array();

    /**
     * Used to suppress read receipt requests.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\SuppressReadReceiptType[]
     */
    public $SuppressReadReceipt = array();

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\TentativelyAcceptItemType[]
     */
    public $TentativelyAcceptItem = array();
}
