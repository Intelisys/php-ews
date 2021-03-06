<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetNonIndexableItemDetailsType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to retrieve non-indexable item details.
 *
 * @package php-ews\Request
 */
class GetNonIndexableItemDetailsType extends BaseRequestType
{
    /**
     * Specifies an array of Mailbox elements.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayofLegacyDNsType
     */
    public $Mailboxes;

    /**
     * Contains the direction for pagination in the search result.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\SearchPageDirectionType
     */
    public $PageDirection;

    /**
     * Specifies the reference for a page item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $PageItemReference;

    /**
     * Contains the number of items to be returned in a single page for a search
     * result.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $PageSize;

    /**
     * Whether or not to search archive folders only.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $SearchArchiveOnly;
}
