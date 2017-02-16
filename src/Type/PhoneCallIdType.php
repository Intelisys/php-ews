<?php
/**
 * Contains \Intelisys\PhpEws\Type\PhoneCallIdType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the identifier of a phone call.
 *
 * @package php-ews\Type
 */
class PhoneCallIdType extends Type
{
    /**
     * Identifies the phone call to disconnect.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;
}
