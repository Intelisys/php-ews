<?php
/**
 * Contains \Intelisys\PhpEws\Type\PermissionSetType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Contains all the permissions that are configured for a folder.
 *
 * @package php-ews\Type
 */
class PermissionSetType extends Type
{
    /**
     * Contains the collection of permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * Contains an array of unknown entries that cannot be resolved against the
     * Active Directory directory service.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
