<?php
/**
 * Contains \Intelisys\PhpEws\Type\ExtendedPropertyAttributedValueType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines an extended property for a persona.
 *
 * @package php-ews\Type
 */
class ExtendedPropertyAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for its associated Value element.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Specifies an extended property for a persona.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ExtendedPropertyType
     */
    public $Value;
}
