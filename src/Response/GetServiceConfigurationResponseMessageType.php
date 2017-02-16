<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetServiceConfigurationResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to a GetServiceConfiguration request.
 *
 * @package php-ews\Response
 */
class GetServiceConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of service configuration response messages.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfServiceConfigurationResponseMessageType
     */
    public $ResponseMessages;
}
