<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfFieldOrdersType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines how items are sorted in a FindItem or FindConversation request.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFieldOrdersType extends ArrayType
{
    /**
     * Represents a single field by which to sort results and indicates the
     * direction for the sort.
     *
     * One or more of these elements may be included.
     *
     * FieldOrder elements are applied in the order specified for sorting.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FieldOrderType[]
     */
    public $FieldOrder = array();
}
