<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetUserConfigurationType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to get a user configuration object.
 *
 * @package php-ews\Request
 */
class GetUserConfigurationType extends BaseRequestType
{
    /**
     * Represents the name of a user configuration object.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationNameType
     */
    public $UserConfigurationName;

    /**
     * Specifies the user configuration property types to return.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\UserConfigurationPropertyType
     */
    public $UserConfigurationProperties;
}
