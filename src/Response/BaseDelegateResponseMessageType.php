<?php
/**
 * Contains \Intelisys\PhpEws\Response\BaseDelegateResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Base class for delegate response messages.
 *
 * @package php-ews\Response
 */
abstract class BaseDelegateResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
