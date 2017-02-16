<?php
/**
 * Contains \Intelisys\PhpEws\Enumeration\HoldActionType.
 */

namespace Intelisys\PhpEws\Enumeration;

use \Intelisys\PhpEws\Enumeration;

/**
 * Defines the type of action for a mailbox hold.
 *
 * @package php-ews\Enumeration
 */
class HoldActionType extends Enumeration
{
    /**
     * Indicates that a mailbox hold will be created.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CREATE = 'Create';

    /**
     * Indicates that a mailbox hold will be removed.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const REMOVE = 'Remove';

    /**
     * Indicates that a mailbox hold will be updated.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const UPDATE = 'Update';
}
