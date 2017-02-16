<?php
/**
 * Contains \Intelisys\PhpEws\Request\BaseDelegateType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Base class for delegate requests.
 *
 * @package php-ews\Request
 */
abstract class BaseDelegateType extends BaseRequestType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
