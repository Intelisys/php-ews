<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetUserAvailabilityResponseType.
 */

namespace Intelisys\PhpEws\Response;

use \Intelisys\PhpEws\Response;

/**
 * Defines the properties that define user availability information or suggested
 * meeting time information.
 *
 * @package php-ews\Response
 */
class GetUserAvailabilityResponseType extends Response
{
    /**
     * FContains the requested users' availability information and the response
     * status.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * Contains response status information and suggestion data for requested
     * meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
