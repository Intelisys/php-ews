<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetSharingMetadataType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to get an opaque authentication token that identifies the
 * sharing invitation.
 *
 * @package php-ews\Request
 */
class GetSharingMetadataType extends BaseRequestType
{
    /**
     * Represents the identifier of the folder on the server that will be
     * shared.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType
     */
    public $IdOfFolderToShare;

    /**
     * Represents the SMTP email addresses of one or more entities that will be
     * granted access to the data in the folder that is identified by the
     * IdOfFolderToShare element.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfSmtpAddressType
     */
    public $Recipients;

    /**
     * Represents the SMTP email address that corresponds to the mailbox that
     * contains the folder that is identified by the IdOfFolderToShare element.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SenderSmtpAddress;
}
