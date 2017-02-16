<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfPersonaAttributionsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Specifies an array of attribution information for one or more of the contacts
 * or Active Directory recipients aggregated into the associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfPersonaAttributionsType extends ArrayType
{
    /**
     * Specifies an instance in an array of attributes for a Persona.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PersonaAttributionType[]
     */
    public $Attribution = array();
}
