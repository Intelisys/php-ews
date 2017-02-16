<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayofLegacyDNsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes identified by legacy distinguished name.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayofLegacyDNsType extends ArrayType
{
    /**
     * Identifies a mailbox by its legacy distinguished name.
     *
     * @since Exchange 2013
     *
     * @var string[]
     */
    public $LegacyDN = array();
}
