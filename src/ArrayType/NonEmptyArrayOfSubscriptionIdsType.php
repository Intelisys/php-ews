<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfSubscriptionIdsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Represents an array of invalid subscription IDs.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfSubscriptionIdsType extends ArrayType
{
    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var string[]
     */
    public $SubscriptionId = array();
}
