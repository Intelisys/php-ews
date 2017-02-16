<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfImGroupType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of instant messaging (IM) groups.
 *
 * @package php-ews\Array
 */
class ArrayOfImGroupType extends ArrayType
{
    /**
     * Represents an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ImGroupType[]
     */
    public $ImGroup = array();
}
