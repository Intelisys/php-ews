<?php
/**
 * Contains \Intelisys\PhpEws\Type\PhoneNumberAttributedValueType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a phone number and its associated attributions.
 *
 * @package php-ews\Type
 */
class PhoneNumberAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for the Value element.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Specifies a phone number and type information.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PersonaPhoneNumberType
     */
    public $Value;
}
