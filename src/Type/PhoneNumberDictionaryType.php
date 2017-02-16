<?php
/**
 * Contains \Intelisys\PhpEws\Type\PhoneNumberDictionaryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a collection of telephone numbers for a contact.
 *
 * @package php-ews\Type
 */
class PhoneNumberDictionaryType extends Type
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PhoneNumberDictionaryEntryType
     */
    public $Entry;
}
