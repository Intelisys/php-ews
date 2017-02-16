<?php
/**
 * Contains \Intelisys\PhpEws\Response\PerformReminderActionResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to a PerformReminderAction request.
 *
 * @package php-ews\Response
 */
class PerformReminderActionResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the identifiers of updated reminder items.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfItemIdsType
     */
    public $UpdatedItemIds;
}
