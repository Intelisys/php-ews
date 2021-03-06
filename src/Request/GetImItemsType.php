<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetImItemsType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to get information about the specified instant messaging
 * groups and instant messaging contact personas.
 *
 * @package php-ews\Request
 */
class GetImItemsType extends BaseRequestType
{
    /**
     * Contains an array of contact item identifiers.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $ContactIds;

    /**
     * Identifies an array of instant messaging group identifiers.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $GroupIds;

    /**
     * Contains the extended properties used for the Unified Contact Store
     * operations.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfExtendedFieldURIs
     */
    public $ExtendedProperties;
}
