<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfDeletedOccurrencesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of deleted occurrences of a recurring calendar item.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfDeletedOccurrencesType extends ArrayType
{
    /**
     * Represents a deleted occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\DeletedOccurrenceInfoType[]
     */
    public $DeletedOccurrence = array();
}
