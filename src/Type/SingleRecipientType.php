<?php
/**
 * Contains \Intelisys\PhpEws\Type\SingleRecipientType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package php-ews\Type
 */
class SingleRecipientType extends Type
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
