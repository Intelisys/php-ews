<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetSharingMetadataResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a request.
 *
 * @package php-ews\Response
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a collection of data structures that a client can use to
     * authorize the sharing of its calendar or contact data with other clients.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfEncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderDataCollection;

    /**
     * Represents recipients of the folder sharing request that are invalid.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfInvalidRecipientsType
     */
    public $InvalidRecipients;
}
