<?php
/**
 * Contains \Intelisys\PhpEws\Type\PersonaResponseShapeType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines a set of properties for a persona.
 *
 * @package php-ews\Type
 */
class PersonaResponseShapeType extends Type
{
    /**
     * Identifies additional properties.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the set of properties to return in an item or folder response.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
