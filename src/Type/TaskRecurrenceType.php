<?php
/**
 * Contains \Intelisys\PhpEws\Type\TaskRecurrenceType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Defines the recurrence pattern for recurring tasks.
 *
 * @package php-ews\Type
 *
 * @todo Implement TaskRecurrencePatternTypes trait.
 * @todo Implement RecurrenceRangeTypes trait.
 */
class TaskRecurrenceType extends RecurrenceType
{
    /**
     * Describes how many days after the completion of the current task the next
     * occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DailyRegeneratingPatternType
     */
    public $DailyRegeneration;

    /**
     * Describes how many months after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MonthlyRegeneratingPatternType
     */
    public $MonthlyRegeneration;

    /**
     * Describes how many weeks after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\WeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;

    /**
     * Describes how many years after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\YearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;
}
