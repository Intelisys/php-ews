<?php
/**
 * Contains \Intelisys\PhpEws\Enumeration\ImportanceChoicesType.
 */

namespace Intelisys\PhpEws\Enumeration;

use \Intelisys\PhpEws\Enumeration;

/**
 * Describes the importance of an item or the aggregated importance of all items
 * in a conversation in the current folder.
 *
 * @package php-ews\Enumeration
 */
class ImportanceChoicesType extends Enumeration
{
    /**
     * High importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HIGH = 'High';

    /**
     * Low importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LOW = 'Low';

    /**
     * Normal importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NORMAL = 'Normal';
}
