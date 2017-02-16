<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfMailboxQueriesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a list of mailboxes and associated queries for discovery search.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfMailboxQueriesType extends ArrayType
{
    /**
     * Specifies a query and the scope of a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\MailboxQueryType[]
     */
    public $MailboxQuery = array();
}
