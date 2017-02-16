<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetDiscoverySearchConfigurationResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to a GetDiscoverySearchConfiguration request.
 *
 * @package php-ews\Response
 */
class GetDiscoverySearchConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies an array of discovery search configurations.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfDiscoverySearchConfigurationType
     */
    public $DiscoverySearchConfigurations;
}
