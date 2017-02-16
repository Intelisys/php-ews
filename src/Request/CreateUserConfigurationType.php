<?php
/**
 * Contains \Intelisys\PhpEws\Request\CreateUserConfigurationType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to create a user configuration object.
 *
 * @package php-ews\Request
 */
class CreateUserConfigurationType extends BaseRequestType
{
    /**
     * Represents a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationType
     */
    public $UserConfiguration;
}
