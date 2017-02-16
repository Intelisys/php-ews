<?php
/**
 * Contains \Intelisys\PhpEws\Type\PathToIndexedFieldType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Identifies individual members of a dictionary.
 *
 * @package php-ews\Type
 */
class PathToIndexedFieldType extends BasePathToElementType
{
    /**
     * Identifies the member of the dictionary to return.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FieldIndex;

    /**
     * FieldURI property
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DictionaryURIType
     */
    public $FieldURI;
}
