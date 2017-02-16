<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfSearchableMailboxesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes that can be searched.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchableMailboxesType extends ArrayType
{
    /**
     * Specifies a mailbox.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\SearchableMailboxType[]
     */
    public $SearchableMailbox = array();
}
