<?php
/**
 * Contains \Intelisys\PhpEws\Type\WorkingPeriod.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the work week days and hours of the mailbox user.
 *
 * @package php-ews\Type
 */
class WorkingPeriod extends Type
{
    /**
     * Contains the list of working days scheduled for the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * Represents the end of the working day for a mailbox user.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $EndTimeInMinutes;

    /**
     * Represents the start of the working day for a mailbox user.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $StartTimeInMinutes;
}
