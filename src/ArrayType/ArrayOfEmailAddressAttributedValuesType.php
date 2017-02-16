<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfEmailAddressAttributedValuesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of EmailAddressAttributedValue values and the identifiers of
 * their source attributions.
 *
 * @package php-ews\Array
 */
class ArrayOfEmailAddressAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of email addresses and their associated
     * attributions.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressAttributedValueType[]
     */
    public $EmailAddressAttributedValue = array();
}
