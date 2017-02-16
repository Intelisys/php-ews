<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfTimeZoneDefinitionType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of time zone definitions.
 *
 * @package php-ews\Array
 */
class ArrayOfTimeZoneDefinitionType extends ArrayType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\TimeZoneDefinitionType[]
     */
    public $TimeZoneDefinition = array();
}
