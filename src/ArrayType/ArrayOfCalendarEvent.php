<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfCalendarEvent.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a set of unique calendar item occurrences that represent the
 * requested user's availability.
 *
 * @package php-ews\Array
 */
class ArrayOfCalendarEvent extends ArrayType
{
    /**
     * Represents a unique calendar item occurrence.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\CalendarEvent[]
     */
    public $CalendarEvent = array();
}
