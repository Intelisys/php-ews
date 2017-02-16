<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetImItemsResponse.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to a GetImItems request.
 *
 * @package php-ews\Response
 */
class GetImItemsResponse extends ResponseMessageType
{
    /**
     * Contains a list of instant messaging groups and instant messaging
     * contacts.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ImItemListType
     */
    public $ImItemList;
}
