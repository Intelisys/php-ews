<?php
/**
 * Contains \Intelisys\PhpEws\Type\PhysicalAddressDictionaryEntryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Describes a single physical address for a contact item.
 *
 * @package php-ews\Type
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class PhysicalAddressDictionaryEntryType extends Type
{
    /**
     * Represents the city name that is associated with a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $City;

    /**
     * Represents the country or region for a given physical address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $CountryOrRegion;

    /**
     * Identifies a physical address.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\PhysicalAddressKeyType
     */
    public $Key;

    /**
     * Represents the postal code for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PostalCode;

    /**
     * Represents the state of residence for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $State;

    /**
     * Represents a street address for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Street;
}
