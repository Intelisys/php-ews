<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfMailboxHoldStatusType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a list of one or more mailbox hold statuses.
 *
 * @package php-ews\Array
 */
class ArrayOfMailboxHoldStatusType extends ArrayType
{
    /**
     * Specifies the hold status of the mailbox.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\MailboxHoldStatusType[]
     */
    public $MailboxHoldStatus = array();
}
