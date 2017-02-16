<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfPeopleType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of persona data.
 *
 * @package php-ews\Array
 */
class ArrayOfPeopleType extends ArrayType
{
    /**
     * Specifies a set of persona data.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PersonaType[]
     */
    public $Persona = array();
}
