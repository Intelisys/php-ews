<?php
/**
 * Contains \Intelisys\PhpEws\Type\AddressListIdType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines the identifier of an address list.
 *
 * @package php-ews\Type
 */
class AddressListIdType extends Type
{
    /**
     * A string address list identifier.
     *
     * This attribute is required.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Id;
}
