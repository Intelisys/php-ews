<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfRetentionPolicyTagsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a list of retention tags.
 *
 * @package php-ews\Array
 */
class ArrayOfRetentionPolicyTagsType extends ArrayType
{
    /**
     * Specifies the retention policy for a mailbox item.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\RetentionPolicyTagType[]
     */
    public $RetentionPolicyTag = array();
}
