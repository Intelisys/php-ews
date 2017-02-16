<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfOccurrenceInfoType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of recurring calendar item occurrences that have been
 * modified so that they are different than the recurrence master item.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfOccurrenceInfoType extends ArrayType
{
    /**
     * Represents a single modified occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\OccurrenceInfoType[]
     */
    public $Occurrence = array();
}
