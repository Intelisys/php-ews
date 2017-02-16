<?php
/**
 * Contains \Intelisys\PhpEws\Type\ReferenceItemResponseType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Base class for responding to items with a reference.
 *
 * ObjectName property is prohibited.
 *
 * @package php-ews\Type
 */
class ReferenceItemResponseType extends ResponseObjectType
{
    /**
     * {@inheritdoc}
     *
     * @prohibited
     */
    public $ObjectName;
}
