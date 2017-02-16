<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRuleValidationErrorsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleValidationErrorsType extends ArrayType
{
    /**
     * Represents a single validation error on a particular rule property value,
     * predicate property value, or action property value.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\RuleValidationErrorType[]
     */
    public $Error = array();
}
