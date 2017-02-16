<?php
/**
 * Contains \Intelisys\PhpEws\Type\CalendarPermissionType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Defines the access that a user has to a Calendar folder.
 *
 * @package php-ews\Type
 */
class CalendarPermissionType extends BasePermissionType
{
    /**
     * Represents the permission level that a user has on a Calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;

    /**
     * Indicates whether a user has permission to read items within a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\CalendarPermissionReadAccessType
     */
    public $ReadItems;
}
