<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetPhoneCallInformationResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to a single GetPhoneCallInformation request.
 *
 * @package php-ews\Response
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the state information for a phone call.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\PhoneCallInformationType
     */
    public $PhoneCallInformation;
}
