<?php
/**
 * Contains \Intelisys\PhpEws\Type\RecurringMasterItemIdRanges.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines an occurrence range.
 *
 * @package php-ews\Type
 */
class RecurringMasterItemIdRanges extends ItemIdType
{
    /**
     * Specifies an array of recurrence ranges.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfOccurrenceRangesType
     */
    public $Ranges;
}
