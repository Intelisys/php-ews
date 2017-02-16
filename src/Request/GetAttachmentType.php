<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetAttachmentType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to get an attachment from the Exchange store.
 *
 * @package php-ews\Request
 */
class GetAttachmentType extends BaseRequestType
{
    /**
     * Contains an array of attachment identifiers.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;

    /**
     * Identifies additional extended item properties to return in a response to
     * a GetAttachment request.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\AttachmentResponseShapeType
     */
    public $AttachmentShape;
}
