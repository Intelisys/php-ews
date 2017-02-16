<?php
/**
 * Contains \Intelisys\PhpEws\Type\SetRuleOperationType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents an operation to update an existing rule.
 *
 * @package php-ews\Type
 */
class SetRuleOperationType extends RuleOperationType
{
    /**
     * Represents a rule in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\RuleType
     */
    public $Rule;
}
