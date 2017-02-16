<?php
/**
 * Contains \Intelisys\PhpEws\Type\OpenAsAdminOrSystemServiceType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * For internal use only. Not used by clients.
 *
 * @package php-ews\Type
 */
class OpenAsAdminOrSystemServiceType extends Type
{
    /**
     * Not intended for client use.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $ConnectingSID;

    /**
     * Not intended for client use.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $LogonType;
}
