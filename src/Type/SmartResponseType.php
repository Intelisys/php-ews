<?php
/**
 * Contains \Intelisys\PhpEws\Type\SmartResponseType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Base class for smart responses that include new body content.
 *
 * @package php-ews\Type
 */
class SmartResponseType extends SmartResponseBaseType
{
    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\BodyType
     */
    public $NewBodyContent;
}
