<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetRoomListsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the response from a GetRoomLists Operation request.
 *
 * @package php-ews\Response
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a list of e-mail addresses and display names that represent
     * lists of meeting rooms.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfEmailAddressesType
     */
    public $RoomLists;
}
