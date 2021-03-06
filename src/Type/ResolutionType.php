<?php
/**
 * Contains \Intelisys\PhpEws\Type\ResolutionType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a single resolved entity.
 *
 * @package php-ews\Type
 */
class ResolutionType extends Type
{
    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
