<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetMessageTrackingReportResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the response for the GetMessageTrackingReport operation.
 *
 * @package php-ews\Response
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a single message that is returned in a GetMessageTrackingReport
     * operation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\Type\MessageTrackingReportType
     */
    public $MessageTrackingReport;

    /**
     * Provides timing and performance information that is used for reporting in
     * a DataCenter.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Diagnostics;

    /**
     * Contains a property bag to store errors that are returned through the Web
     * service.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfArraysOfTrackingPropertiesType
     */
    public $Errors;

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
