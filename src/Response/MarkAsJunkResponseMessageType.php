<?php
/**
 * Contains \Intelisys\PhpEws\Response\MarkAsJunkResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response message for a MarkAsJunk request.
 *
 * @package php-ews\Response
 */
class MarkAsJunkResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the identifier of the item that was moved.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType
     */
    public $MovedItemId;
}
