<?php
/**
 * Contains \Intelisys\PhpEws\Type\DirectoryEntryType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents a directory entry.
 *
 * @package php-ews\Type
 */
class DirectoryEntryType extends Type
{
    /**
     * An identifier that contains an email address and display name that
     * represents a meeting room.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     */
    public $Id;
}
