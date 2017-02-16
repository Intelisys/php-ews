<?php
/**
 * Contains \Intelisys\PhpEws\Type\OccurrencesRangeType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines a range of calendar item occurrences for a repeating calendar item.
 *
 * @package php-ews\Type
 */
class OccurrencesRangeType extends Type
{
    /**
     * Start date of the recurring item range.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;

    /**
     * End date of the recurring item range.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * Number of occurrences of the recurring item.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $Count;

    /**
     * Whether or not the client should compare the original start time with the
     * new start time.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $CompareOriginalStartTime;
}
