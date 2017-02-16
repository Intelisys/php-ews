<?php
/**
 * Contains \Intelisys\PhpEws\Request\DisconnectPhoneCallType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Represents a request to disconnect a call.
 *
 * @package php-ews\Request
 */
class DisconnectPhoneCallType extends BaseRequestType
{
    /**
     * Specifies the identifier of the call to disconnect.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
