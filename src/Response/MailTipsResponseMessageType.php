<?php
/**
 * Contains \Intelisys\PhpEws\Response\MailTipsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents mail tips settings.
 *
 * @package php-ews\Response
 */
class MailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents values for various types of mail tips.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\MailTips
     */
    public $MailTips;
}
