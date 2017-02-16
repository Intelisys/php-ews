<?php
/**
 * Contains \Intelisys\PhpEws\Type\UserConfigurationDictionaryEntryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the contents of a single dictionary entry property.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryEntryType extends Type
{
    /**
     * Specifies the dictionary key for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationDictionaryObjectType
     */
    public $DictionaryKey;

    /**
     * Specifies the dictionary value for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationDictionaryObjectType
     */
    public $DictionaryValue;
}
