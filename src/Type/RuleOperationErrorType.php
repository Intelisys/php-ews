<?php
/**
 * Contains \Intelisys\PhpEws\Type\RuleOperationErrorType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a rule operation error.
 *
 * @package php-ews\Type
 */
class RuleOperationErrorType extends Type
{
    /**
     * Indicates the index of the operation in the request that caused the rule
     * operation error.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $OperationIndex;

    /**
     * Represents an array of rule validation errors on each rule field that has
     * an error.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfRuleValidationErrorsType
     */
    public $ValidationErrors;
}
