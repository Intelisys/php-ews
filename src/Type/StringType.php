<?php
/**
 * Contains \Intelisys\PhpEws\Type\StringType;
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Base class for string types.
 *
 * @package php-ews\Type
 */
abstract class StringType extends Type
{
    /**
     * Value of the element.
     *
     * @var string
     */
    public $_;
}
