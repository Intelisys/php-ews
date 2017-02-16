<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfSuggestion.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of meeting suggestions.
 *
 * @package php-ews\Array
 */
class ArrayOfSuggestion extends ArrayType
{
    /**
     * Represents a single meeting suggestion.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\Suggestion[]
     */
    public $Suggestion = array();
}
