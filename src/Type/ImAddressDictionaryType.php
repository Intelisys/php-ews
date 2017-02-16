<?php
/**
 * Contains \Intelisys\PhpEws\Type\ImAddressDictionaryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a collection of instant messaging addresses for a contact.
 *
 * @package php-ews\Type
 */
class ImAddressDictionaryType extends Type
{
    /**
     * Represents an instant messaging address for a contact.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ImAddressDictionaryEntryType
     */
    public $Entry;
}
