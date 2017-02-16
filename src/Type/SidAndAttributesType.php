<?php
/**
 * Contains \Intelisys\PhpEws\Type\SidAndAttributesType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a single security identifier and attribute for an Active Directory
 * directory service object group of which the account is a member.
 *
 * @package php-ews\Type
 */
class SidAndAttributesType extends Type
{
    /**
     * Contains group attributes.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Attributes;

    /**
     * Represents the security descriptor definition language (SDDL) form of a
     * security identifier (SID) that represents the group.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SecurityIdentifier;
}
