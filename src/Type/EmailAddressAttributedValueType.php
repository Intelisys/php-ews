<?php
/**
 * Contains \Intelisys\PhpEws\Type\EmailAddressAttributedValueType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines an instance of an array of email addresses and their associated
 * attributions.
 *
 * @package php-ews\Type
 */
class EmailAddressAttributedValueType extends Type
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
     * Specifies the value of an EmailAddress associated with an attributions array.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     */
    public $Value;
}
