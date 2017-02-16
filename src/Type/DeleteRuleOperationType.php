<?php
/**
 * Contains \Intelisys\PhpEws\Type\DeleteRuleOperationType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents an operation to delete an existing Inbox rule.
 *
 * @package php-ews\Type
 */
class DeleteRuleOperationType extends RuleOperationType
{
    /**
     * Specifies the identifier of the rule to delete.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $RuleId;
}
