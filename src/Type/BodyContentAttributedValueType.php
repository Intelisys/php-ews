<?php
/**
 * Contains \Intelisys\PhpEws\Type\BodyContentAttributedValueType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines the body content of an item.
 *
 * @package php-ews\Type
 */
class BodyContentAttributedValueType extends Type
{
    /**
     * Specifies an array of attribution information for one or more of the
     * contacts or active directory recipients aggregated into the associated
     * persona.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfPersonaAttributionsType
     */
    public $Attributions;

    /**
     * Specifies the value of a BodyContentAttributedValue element.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\BodyTypeResponseType
     */
    public $Value;
}
