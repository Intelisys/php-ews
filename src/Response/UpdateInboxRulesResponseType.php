<?php
/**
 * Contains \Intelisys\PhpEws\Response\UpdateInboxRulesResponseType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to an UpdateInboxRules request.
 *
 * @package php-ews\Response
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{
    /**
     * Represents an array of rule validation errors on each rule field that has
     * an error.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfRuleOperationErrorsType
     */
    public $RuleOperationErrors;
}
