<?php
/**
 * Contains \Intelisys\PhpEws\Enumeration\AggregateType.
 */

namespace Intelisys\PhpEws\Enumeration;

use \Intelisys\PhpEws\Enumeration;

/**
 * Indicates the maximum or minimum value of a property that is used for
 * ordering groups of items.
 *
 * @package php-ews\Enumeration
 */
class AggregateType extends Enumeration
{
    /**
     * Indicates that a maximum aggregation should be used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAXIMUM = 'Maximum';

    /**
     * Indicates that a minimum aggregation should be used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MINIMUM = 'Minimum';
}
