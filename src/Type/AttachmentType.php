<?php
/**
 * Contains \Intelisys\PhpEws\Type\AttachmentType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Represents an Exchange attachment.
 *
 * @package php-ews\Type
 */
class AttachmentType extends Type
{
    /**
     * Identifies the file attachment.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\AttachmentIdType
     */
    public $AttachmentId;

    /**
     * Represents an identifier for the contents of an attachment. ContentId can
     * be set to any string value. Applications can use ContentId to implement
     * their own identification mechanisms.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentId;

    /**
     * Contains the Uniform Resource Identifier (URI) that corresponds to the
     * location of the content of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentLocation;

    /**
     * Describes the Multipurpose Internet Mail Extensions (MIME) type of the
     * attachment content.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentType;

    /**
     * Represents whether the attachment appears inline within an item.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsInline;

    /**
     * Represents when the file attachment was last modified.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Represents the name of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Name;

    /**
     * Represents the size in bytes of the file attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Size;
}
