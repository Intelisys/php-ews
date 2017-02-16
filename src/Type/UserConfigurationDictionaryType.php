<?php
/**
 * Contains \Intelisys\PhpEws\Type\UserConfigurationDictionaryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Defines a set of dictionary property entries for a user configuration object.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryType extends Type
{
    /**
     * Specifies the contents of a single dictionary entry property.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationDictionaryEntryType[]
     */
    public $DictionaryEntry = array();
}
