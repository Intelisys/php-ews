<?php
/**
 * Contains \Intelisys\PhpEws\Type\UserConfigurationType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Defines a single user configuration object.
 *
 * @package php-ews\Type
 */
class UserConfigurationType extends Type
{
    /**
     * Contains binary data property content for a user configuration object.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $BinaryData;

    /**
     * Defines a set of dictionary property entries for a user configuration
     * object.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationDictionaryType
     */
    public $Dictionary;

    /**
     * Defines the user configuration object item identifier.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType
     */
    public $ItemId;

    /**
     * Represents the name of a user configuration object.
     *
     * This element must be used when you create a user configuration object.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\UserConfigurationNameType
     */
    public $UserConfigurationName;

    /**
     * Contains XML data property content for a user configuration object.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $XmlData;
}
