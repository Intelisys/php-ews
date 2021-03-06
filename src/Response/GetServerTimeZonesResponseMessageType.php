<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetServerTimeZonesResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single GetServerTimeZones operation
 * request.
 *
 * @package php-ews\Response
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of time zone definitions.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
}
