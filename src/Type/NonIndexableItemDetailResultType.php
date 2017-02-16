<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonIndexableItemDetailResultType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Defines the results of the GetNonIndexableItemDetails request.
 *
 * @package php-ews\Type
 */
class NonIndexableItemDetailResultType extends Type
{
    /**
     * Specifies an array of mailboxes that failed on search.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfFailedSearchMailboxesType
     */
    public $FailedMailboxes;

    /**
     * Contains an array of item details for non-indexable items.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfNonIndexableItemDetailsType
     */
    public $Items;
}
