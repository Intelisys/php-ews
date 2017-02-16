<?php
/**
 * Contains \Intelisys\PhpEws\Response\BaseResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

use \Intelisys\PhpEws\Response;

/**
 * Base class for responses.
 *
 * @package php-ews\Response
 */
class BaseResponseMessageType extends Response
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
