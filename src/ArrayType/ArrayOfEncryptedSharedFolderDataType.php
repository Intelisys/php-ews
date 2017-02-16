<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfEncryptedSharedFolderDataType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents a collection of data structures that a client can use to authorize
 * the sharing of its calendar or contact data with other clients.
 *
 * @package php-ews\Array
 */
class ArrayOfEncryptedSharedFolderDataType extends ArrayType
{
    /**
     * Contains the encrypted data that a client can use to authorize the
     * sharing of its calendar or contact data with other clients.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\EncryptedSharedFolderDataType[]
     */
    public $EncryptedSharedFolderData = array();
}
