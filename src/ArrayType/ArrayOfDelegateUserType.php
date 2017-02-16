<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfDelegateUserType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Contains the identities of delegates to add to or update in a mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfDelegateUserType extends ArrayType
{
    /**
     * Identifies a single delegate to add to or update in a mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\DelegateUserType[]
     */
    public $DelegateUser = array();
}
