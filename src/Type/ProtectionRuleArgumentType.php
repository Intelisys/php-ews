<?php
/**
 * Contains \Intelisys\PhpEws\Type\ProtectionRuleArgumentType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Specifies an argument to be passed to an action.
 *
 * @package php-ews\Type
 */
class ProtectionRuleArgumentType extends Type
{
    /**
     * A non-empty string value that represents the value of an argument to the
     * action part of a protection rule.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Value;
}
