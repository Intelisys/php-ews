<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfExtendedFieldURIs.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines the extended properties used for a request.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfExtendedFieldURIs extends ArrayType
{
    /**
     * Specifies an extended property for the Unified Contact Store.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PathToExtendedFieldType[]
     */
    public $ExtendedProperty = array();
}
