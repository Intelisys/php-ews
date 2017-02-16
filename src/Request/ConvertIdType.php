<?php
/**
 * Contains \Intelisys\PhpEws\Request\ConvertIdType.
 */

namespace Intelisys\PhpEws\Request;

use \Intelisys\PhpEws\Request;

/**
 * Defines a request to convert item and folder identifiers between supported
 * Exchange formats.
 *
 * @package php-ews\Request
 */
class ConvertIdType extends BaseRequestType
{
    /**
     * Describes the identifier format that will be returned for all the
     * converted identifiers.
     *
     * The DestinationFormat is described by the IdFormatType.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\IdFormatType
     */
    public $DestinationFormat;

    /**
     * Contains the source identifiers to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;
}
