<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPeriodsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of periods that define the time offset at different
 * stages of a time zone.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfPeriodsType extends ArrayType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of a
     * time zone.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\PeriodType[]
     */
    public $Period = array();
}
