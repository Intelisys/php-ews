<?php
/**
 * Contains \Intelisys\PhpEws\Type\PermissionType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Defines the access that a user has to a folder.
 *
 * @package php-ews\Type
 */
class PermissionType extends BasePermissionType
{
    /**
     * Represents the combination of permissions that a user has on a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\PermissionLevelType
     */
    public $PermissionLevel;

    /**
     * Indicates whether a user has permission to read items within a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\PermissionReadAccessType
     */
    public $ReadItems;
}
