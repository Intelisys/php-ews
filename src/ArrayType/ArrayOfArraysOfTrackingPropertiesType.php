<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfArraysOfTrackingPropertiesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a property bag to store errors that are returned through the Web
 * service.
 *
 * @package php-ews\Array
 */
class ArrayOfArraysOfTrackingPropertiesType extends ArrayType
{
    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfTrackingPropertiesType[]
     */
    public $Properties = array();
}
