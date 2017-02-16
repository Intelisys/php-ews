<?php
/**
 * Contains \Intelisys\PhpEws\Type\MailboxSearchScopeType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines a mailbox and a search scope for a discovery search.
 *
 * @package php-ews\Type
 */
class MailboxSearchScopeType extends Type
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfExtendedAttributesType
     */
    public $ExtendedAttributes;

    /**
     * Contains an identifier for a mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Mailbox;

    /**
     * Specifies a mailbox and a search scope for a discovery search.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\MailboxSearchLocationType
     */
    public $SearchScope;
}
