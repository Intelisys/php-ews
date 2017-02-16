<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfMailTipsResponseMessageType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a list of mail tips response messages.
 *
 * @package php-ews\Array
 */
class ArrayOfMailTipsResponseMessageType extends ArrayType
{
    /**
     * Represents mail tips settings.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Response\MailTipsResponseMessageType[]
     */
    public $MailTipsResponseMessageType = array();
}
