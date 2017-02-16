<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfTrackingPropertiesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a list of one or more tracking properties.
 *
 * @package php-ews\Array
 */
class ArrayOfTrackingPropertiesType extends ArrayType
{
    /**
     * Represents a name and value pair of strings that is used to create
     * properties for message tracking reports.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\Type\TrackingPropertyType[]
     */
    public $TrackingPropertyType = array();
}
