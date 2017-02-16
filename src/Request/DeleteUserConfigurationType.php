<?php
/**
 * Contains \Intelisys\PhpEws\Request\DeleteUserConfigurationType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to delete a user configuration object.
 *
 * @package php-ews\Request
 */
class DeleteUserConfigurationType extends BaseRequestType
{
    /**
     * Represents the name of the user configuration object to delete.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationNameType
     */
    public $UserConfigurationName;
}
