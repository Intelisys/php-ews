<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfTransitionsGroupsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of time zone transition groups.
 *
 * @package php-ews\Array
 */
class ArrayOfTransitionsGroupsType extends ArrayType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfTransitionsType[]
     */
    public $TransitionsGroup = array();
}
