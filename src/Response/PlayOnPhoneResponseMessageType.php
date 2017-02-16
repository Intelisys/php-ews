<?php
/**
 * Contains \Intelisys\PhpEws\Response\PlayOnPhoneResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to a request to play a voice mail over the telephone.
 *
 * @package php-ews\Response
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the telephone call identifier.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
