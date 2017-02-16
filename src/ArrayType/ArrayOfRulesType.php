<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRulesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of rules in the user's mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfRulesType extends ArrayType
{
    /**
     * Contains a single rule and represents a rule in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\RuleType[]
     */
    public $Rule = array();
}
