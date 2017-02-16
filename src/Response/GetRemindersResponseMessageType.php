<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetRemindersResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the response to a GetReminders request.
 *
 * @package php-ews\Response
 */
class GetRemindersResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the reminders returned in the response.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfRemindersType
     */
    public $Reminders;
}
