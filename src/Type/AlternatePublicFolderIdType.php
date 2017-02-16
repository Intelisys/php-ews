<?php
/**
 * Contains \Intelisys\PhpEws\Type\AlternatePublicFolderIdType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Describes a public folder identifier to convert to another identifier format.
 *
 * @package php-ews\Type
 */
class AlternatePublicFolderIdType extends AlternateIdBaseType
{
    /**
     * Contains the public folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $FolderId;
}
