<?php
/**
 * Contains \Intelisys\PhpEws\Type\EmailAddressDictionaryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a collection of e-mail addresses for a contact.
 *
 * @package php-ews\Type
 */
class EmailAddressDictionaryType extends Type
{
    /**
     * Represents a single e-mail address for a contact.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressDictionaryEntryType
     */
    public $Entry;
}
