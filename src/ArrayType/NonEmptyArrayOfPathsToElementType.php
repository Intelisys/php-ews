<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines additional properties for use in GetItem, UpdateItem, CreateItem,
 * FindItem, or FindFolder requests.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfPathsToElementType extends ArrayType
{
    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PathToExtendedFieldType[]
     */
    public $ExtendedFieldURI = array();

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PathToUnindexedFieldType[]
     */
    public $FieldURI = array();

    /**
     * Identifies frequently referenced dictionary properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PathToIndexedFieldType[]
     */
    public $IndexedFieldURI = array();
}
