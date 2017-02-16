<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfFailedSearchMailboxesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes that failed on search.
 *
 * @package php-ews\Array
 */
class ArrayOfFailedSearchMailboxesType extends ArrayType
{
    /**
     * Specifies the error message for a mailbox that failed on search.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\FailedSearchMailboxType[]
     */
    public $FailedMailbox = array();
}
