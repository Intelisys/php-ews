<?php
/**
 * Contains \Intelisys\PhpEws\Type\RelativeYearlyRecurrencePatternType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Describes a relative yearly recurrence pattern.
 *
 * @package php-ews\Type
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
{
    /**
     * Describes which week in a month is used in a relative yearly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes the days of the week that are used in item recurrence patterns.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Describes the month when a yearly recurring item occurs.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\MonthNamesType
     */
    public $Month;
}
