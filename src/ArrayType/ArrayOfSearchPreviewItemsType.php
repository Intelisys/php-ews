<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfSearchPreviewItemsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a list of items available for preview.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchPreviewItemsType extends ArrayType
{
    /**
     * Specifies an item preview for a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\SearchPreviewItemType[]
     */
    public $SearchPreviewItem = array();
}
