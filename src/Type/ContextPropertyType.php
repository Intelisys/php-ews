<?php
/**
 * Contains \Intelisys\PhpEws\Type\ContextPropertyType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines the context for an item.
 *
 * @package php-ews\Type
 */
class ContextPropertyType extends Type
{
    /**
     * Specifies the key of the context.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    public $Key;

    /**
     * Specifies the value of the context.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    public $Value;
}
