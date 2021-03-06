<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfCalendarPermissionsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of calendar permissions for a folder.
 *
 * @package php-ews\Array
 */
class ArrayOfCalendarPermissionsType extends ArrayType
{
    /**
     * Defines the access that a delegate user has to a calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\CalendarPermissionType[]
     */
    public $CalendarPermission = array();
}
