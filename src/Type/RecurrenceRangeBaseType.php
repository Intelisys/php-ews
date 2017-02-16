<?php
/**
 * Contains \Intelisys\PhpEws\Type\RecurrenceRangeBaseType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Base class for recurrence ranges,
 *
 * @package php-ews\Type
 */
abstract class RecurrenceRangeBaseType extends Type
{
    /**
     * Represents the start date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $StartDate;
}
