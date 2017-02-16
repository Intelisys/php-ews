<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfEmailAddressesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Specifies an array of all email addresses of an associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfEmailAddressesType extends ArrayType
{
    /**
     * Represents a fully resolved e-mail address.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType[]
     */
    public $Address = array();
}
