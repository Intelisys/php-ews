<?php
/**
 * Contains \Intelisys\PhpEws\Type\Duration.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a time span.
 *
 * @package php-ews\Type
 */
class Duration extends Type
{
    /**
     * Represents the end of the time span.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndTime;

    /**
     * Represents the start of the time span.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartTime;
}
