<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfServiceConfigurationType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents service configurations.
 *
 * @package php-ews\Array
 */
class ArrayOfServiceConfigurationType extends ArrayType
{
    /**
     * Specifies the requested service configurations by name.
     *
     * @since Exchange 2010
     *
     * @var string[]
     *
     * @see \Intelisys\PhpEws\Enumeration\ServiceConfigurationType[]
     */
    public $ConfigurationName = array();
}
