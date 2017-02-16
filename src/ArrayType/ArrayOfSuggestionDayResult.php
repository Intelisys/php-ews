<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfSuggestionDayResult.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of meeting suggestions organized by date.
 *
 * @package php-ews\Array
 */
class ArrayOfSuggestionDayResult extends ArrayType
{
    /**
     * Represents a single day that contains suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\SuggestionDayResult[]
     */
    public $SuggestionDayResult = array();
}
