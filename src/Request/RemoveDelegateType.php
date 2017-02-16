<?php
/**
 * Contains \Intelisys\PhpEws\Request\RemoveDelegateType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to remove delegates from a mailbox.
 *
 * @package php-ews\Request
 */
class RemoveDelegateType extends BaseDelegateType
{
    /**
     * Contains an array of delegate users to remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfUserIdType
     */
    public $UserIds;
}
