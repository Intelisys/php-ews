<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetNonIndexableItemDetailsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to a GetNonIndexableItemDetails request.
 *
 * @package php-ews\Response
 */
class GetNonIndexableItemDetailsResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the results of the GetNonIndexableItemDetails request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\NonIndexableItemDetailResultType
     */
    public $NonIndexableItemDetailsResult;
}
