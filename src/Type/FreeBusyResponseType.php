<?php
/**
 * Contains \Intelisys\PhpEws\Type\FreeBusyResponseType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the free/busy information for a single mailbox user.
 *
 * @package php-ews\Type
 */
class FreeBusyResponseType extends Type
{
    /**
     * Contains availability information for a specific user.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\FreeBusyView
     */
    public $FreeBusyView;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;
}
