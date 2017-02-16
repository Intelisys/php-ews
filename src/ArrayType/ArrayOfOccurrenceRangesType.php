<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfOccurrenceRangesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of recurrence ranges.
 *
 * @package php-ews\Array
 */
class ArrayOfOccurrenceRangesType extends ArrayType
{
    /**
     * Specifies a range of calendar item occurrences for a repeating calendar
     * item.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\OccurrencesRangeType[]
     */
    public $Range = array();
}
