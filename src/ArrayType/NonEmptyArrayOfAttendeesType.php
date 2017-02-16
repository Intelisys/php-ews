<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents attendees who are not required to attend a meeting.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfAttendeesType extends ArrayType
{
    /**
     * Represents attendees and resources for a meeting.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\AttendeeType[]
     */
    public $Attendee = array();
}
