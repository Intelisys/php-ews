<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRecipientsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of recipients of an item.
 *
 * @package php-ews\Array
 */
class ArrayOfRecipientsType extends ArrayType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType[]
     */
    public $Mailbox = array();
}
