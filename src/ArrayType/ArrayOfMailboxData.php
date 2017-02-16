<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfMailboxData.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a list of mailboxes to query for availability information.
 *
 * @package php-ews\Array
 */
class ArrayOfMailboxData extends ArrayType
{
    /**
     * Represents an individual mailbox user and options for the type of data to
     * be returned about the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\MailboxData[]
     */
    public $MailboxData = array();
}
