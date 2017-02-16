<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetSharingFolderResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single GetSharingFolder operation
 * request.
 *
 * @package php-ews\Response
 */
class GetSharingFolderResponseMessageType extends ResponseMessageType
{
    /**
     * Represents the identifier of the local folder in a sharing relationship.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\FolderIdType
     */
    public $SharingFolderId;
}
