<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetUserConfigurationResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents a response that returns a user configuration object.
 *
 * @package php-ews\Response
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationType
     */
    public $UserConfiguration;
}
