<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRoomsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents one or more meeting rooms.
 *
 * @package php-ews\Array
 */
class ArrayOfRoomsType extends ArrayType
{
    /**
     * Defines an e-mail address and display name that represents a meeting
     * room.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\RoomType[]
     */
    public $Room = array();
}
