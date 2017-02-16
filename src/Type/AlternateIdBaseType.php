<?php
/**
 * Contains \Intelisys\PhpEws\Type\AlternateIdBaseType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Base class for alternate id types.
 *
 * @package php-ews\Type
 */
abstract class AlternateIdBaseType extends Type
{
    /**
     * Describes the source or destination format in a request.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\IdFormatType
     */
    public $Format;
}
