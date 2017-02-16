<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetPhoneCallInformationType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to get telephone call information.
 *
 * @package php-ews\Request
 */
class GetPhoneCallInformationType extends BaseRequestType
{
    /**
     * Specifies the identifier of a phone call.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
