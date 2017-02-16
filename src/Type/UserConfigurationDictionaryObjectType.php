<?php
/**
 * Contains \Intelisys\PhpEws\Type\UserConfigurationDictionaryObjectType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the value of a dictionary property.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryObjectType extends Type
{
    /**
     * Specifies the dictionary object type.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\UserConfigurationDictionaryObjectTypesType
     */
    public $Type;

    /**
     * Specifies the dictionary object value as a string.ß
     *
     * @since Exchange 2010
     *
     * @var string[]
     */
    public $Value = array();
}
