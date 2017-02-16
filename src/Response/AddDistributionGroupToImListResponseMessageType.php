<?php
/**
 * Contains \Intelisys\PhpEws\Response\AddDistributionGroupToImListResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to a AddDistributionGroupToImList request.
 *
 * @package php-ews\Response
 */
class AddDistributionGroupToImListResponseMessageType extends ResponseMessageType
{
    /**
     * Represents an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ImGroupType
     */
    public $ImGroup;
}
