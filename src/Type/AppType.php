<?php
/**
 * Contains \Intelisys\PhpEws\Type\AppType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines information about an XML manifest file for a mail app that is
 * installed in a mailbox.
 *
 * @package php-ews\Type
 */
class AppType extends Type
{
    /**
     * Contains the base64-encoded app manifest file.
     *
     * @since Exchange 2013 SP1
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $Manifest;

    /**
     * Contains metadata about the mail app.
     *
     * @since Exchange 2013 SP1
     *
     * @var \Intelisys\PhpEws\Type\AppMetadata
     */
    public $Metadata;
}
