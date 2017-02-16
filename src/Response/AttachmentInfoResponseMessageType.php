<?php
/**
 * Contains \Intelisys\PhpEws\Response\AttachmentInfoResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single CreateAttachment operation
 * request.
 *
 * @package php-ews\Response
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the items or files that are attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfAttachmentsType
     */
    public $Attachments;
}
