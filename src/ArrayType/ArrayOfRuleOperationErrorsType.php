<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRuleOperationErrorsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleOperationErrorsType extends ArrayType
{
    /**
     * Represents a rule operation error.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\RuleOperationErrorType[]
     */
    public $RuleOperationError = array();
}
