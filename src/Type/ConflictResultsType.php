<?php
/**
 * Contains \Intelisys\PhpEws\Type\ConflictResultsType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Indicates the number of conflicts in an UpdateItem Operation response.
 *
 * @package php-ews\Type
 */
class ConflictResultsType extends Type
{
    /**
     * Contains the number of conflicts in an UpdateItem Operation response.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Count;
}
