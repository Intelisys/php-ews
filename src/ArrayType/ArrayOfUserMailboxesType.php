<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfUserMailboxesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of mailboxes.
 *
 * @package php-ews\Array
 */
class ArrayOfUserMailboxesType extends ArrayType
{
    /**
     * Identifies a single user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\UserMailboxType[]
     */
    public $UserMailbox = array();
}
