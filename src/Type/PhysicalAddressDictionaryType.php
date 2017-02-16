<?php
/**
 * Contains \Intelisys\PhpEws\Type\PhysicalAddressDictionaryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a collection of physical addresses that are associated with a
 * contact.
 *
 * @package php-ews\Type
 */
class PhysicalAddressDictionaryType extends Type
{
    /**
     * Describes a single physical address for a contact item.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PhysicalAddressDictionaryEntryType
     */
    public $Entry;
}
