<?php
/**
 * Contains \Intelisys\PhpEws\Response\FolderInfoResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and result of a single CopyFolder operation request.
 *
 * @package php-ews\Response
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of copied folders.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfFoldersType
     */
    public $Folders;
}
