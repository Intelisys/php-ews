<?php
/**
 * Contains \Intelisys\PhpEws\Type\MailboxQueryType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines a query and the scope of a discovery search.
 *
 * @package php-ews\Type
 */
class MailboxQueryType extends Type
{
    /**
     * Specifies a list of one or more mailboxes and associated search scopes
     * for a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfMailboxSearchScopesType
     */
    public $MailboxSearchScopes;

    /**
     * Contains the search query for the hold.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Query;
}
