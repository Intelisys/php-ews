<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfServiceConfigurationResponseMessageType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of service configuration response messages.
 *
 * @package php-ews\Array
 */
class ArrayOfServiceConfigurationResponseMessageType extends ArrayType
{
    /**
     * Contains service configuration settings.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Response\ServiceConfigurationResponseMessageType[]
     */
    public $ServiceConfigurationResponseMessageType = array();
}
