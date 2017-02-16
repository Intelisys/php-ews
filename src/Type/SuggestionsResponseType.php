<?php
/**
 * Contains \Intelisys\PhpEws\Type\SuggestionsResponseType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents response status information and suggestion data for requested
 * meeting suggestions.
 *
 * @package php-ews\Type
 */
class SuggestionsResponseType extends Type
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * Contains an array of meeting suggestions organized by date.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
