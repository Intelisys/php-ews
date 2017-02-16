<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfUserIdType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of delegate users to get or remove from a principal's
 * mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfUserIdType extends ArrayType
{
    /**
     * Identifies a delegate to get or remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\UserIdType[]
     */
    public $UserId = array();
}
