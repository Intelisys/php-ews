<?php
/**
 * Contains \Intelisys\PhpEws\Type\BodyContentType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines the value of a BodyContentAttributedValue element.
 *
 * @package php-ews\Type
 */
class BodyContentType extends Type
{
    /**
     * Identifies how the body text is formatted.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\BodyTypeResponseType
     */
    public $BodyType;

    /**
     * Contains the value of the body content.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
