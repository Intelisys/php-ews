<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfAlternateIdsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines the source identifiers to convert.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfAlternateIdsType extends ArrayType
{
    /**
     * Describes an item or folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\AlternateIdType[]
     */
    public $AlternateId = array();

    /**
     * Describes a public folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\AlternatePublicFolderIdType[]
     */
    public $AlternatePublicFolderId = array();

    /**
     * Describes a public folder item identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\AlternatePublicFolderItemIdType[]
     */
    public $AlternatePublicFolderItemId = array();
}
