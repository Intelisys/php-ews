<?php
/**
 * Contains \Intelisys\PhpEws\Type\InternetHeaderType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the Internet message header for a given header within a headers
 * collection.
 *
 * @package php-ews\Type
 *
 * @todo Extend a string class.
 */
class InternetHeaderType extends Type
{
    /**
     * The value of the header.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the header name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $HeaderName;
}
