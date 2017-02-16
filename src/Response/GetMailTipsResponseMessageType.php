<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetMailTipsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the response message for a GetMailTips Operation.
 *
 * @package php-ews\Response
 */
class GetMailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a list of mail tips response messages.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
}
