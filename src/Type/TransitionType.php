<?php
/**
 * Contains \Intelisys\PhpEws\Type\TransitionType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Represents a time zone transition.
 *
 * @package php-ews\Type
 *
 * @todo Alter RecurringDateTransitionType to extend this class.
 */
class TransitionType extends Type
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\TransitionTargetType
     */
    public $To;
}
