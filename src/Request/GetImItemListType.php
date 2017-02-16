<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetImItemListType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to get a list of instant messaging groups and contacts.
 *
 * @package php-ews\Request
 */
class GetImItemListType extends BaseRequestType
{
    /**
     * Contains any extended properties used for the request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfExtendedFieldURIs
     */
    public $ExtendedProperties;
}
