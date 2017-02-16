<?php
/**
 * Contains \Intelisys\PhpEws\Type\DeletedOccurrenceInfoType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a deleted occurrence of a recurring calendar item.
 *
 * @package php-ews\Type
 */
class DeletedOccurrenceInfoType extends Type
{
    /**
     * Represents the start time of a deleted occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;
}
