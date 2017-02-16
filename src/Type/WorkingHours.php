<?php
/**
 * Contains \Intelisys\PhpEws\Type\WorkingHours.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the time zone settings and working hours for the requested mailbox
 * user.
 *
 * @package php-ews\Type
 */
class WorkingHours extends Type
{
    /**
     * Contains elements that identify time zone information.
     *
     * This element also contains information about the transition between
     * standard time and daylight saving time.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\SerializableTimeZone
     */
    public $TimeZone;

    /**
     * Contains working period information for the mailbox user.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
