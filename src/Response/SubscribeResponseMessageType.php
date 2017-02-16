<?php
/**
 * Contains \Intelisys\PhpEws\Response\SubscribeResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single Subscribe Operation request.
 *
 * @package php-ews\Response
 */
class SubscribeResponseMessageType extends ResponseMessageType
{
    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we need a WatermarkType.
     */
    public $Watermark;
}
