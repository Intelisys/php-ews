<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfPostalAddressAttributedValuesType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of business addresses and the identifiers of their source
 * attributions.
 *
 * @package php-ews\Array
 */
class ArrayOfPostalAddressAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of postal addresses and their
     * associated attributions.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PostalAddressAttributedValueType[]
     */
    public $PostalAddressAttributedValue = array();
}
