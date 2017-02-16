<?php
/**
 * Contains \Intelisys\PhpEws\Type\CreateRuleOperationType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents an operation to create a new Inbox rule.
 *
 * @package php-ews\Type
 */
class CreateRuleOperationType extends RuleOperationType
{
    /**
     * Represents a rule to be created in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\RuleType
     */
    public $Rule;
}
