<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfWorkingPeriod.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents working period information for the mailbox user.
 *
 * @package php-ews\Array
 */
class ArrayOfWorkingPeriod extends ArrayType
{
    /**
     * Contains the work week days and hours of the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\WorkingPeriod[]
     */
    public $WorkingPeriod = array();
}
