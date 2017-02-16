<?php
/**
 * Contains \Intelisys\PhpEws\Type\MailboxHoldStatusType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines the hold status of a mailbox.
 *
 * @package php-ews\Type
 */
class MailboxHoldStatusType extends Type
{
    /**
     * Specifies additional information about the hold status of a mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $AdditionalInfo;

    /**
     * Contains the identifier for a mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Mailbox;

    /**
     * Specifies the hold status for a mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\HoldStatusType
     */
    public $Status;
}
