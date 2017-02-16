<?php
/**
 * Contains \Intelisys\PhpEws\Request\RemoveImGroupType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to remove an instant messaging group.
 *
 * @package php-ews\Request
 */
class RemoveImGroupType extends BaseRequestType
{
    /**
     * Identifies the group to be removed.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType
     */
    public $GroupId;
}
