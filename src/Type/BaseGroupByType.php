<?php
/**
 * Contains \Intelisys\PhpEws\Type\BaseGroupByType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Base class for item ordering.
 *
 * @package php-ews\Type
 */
abstract class BaseGroupByType extends Type
{
    /**
     * Determines the order of the groups in the grouped item array that is
     * returned in the response.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\SortDirectionType
     */
    public $Order;
}
