<?php
/**
 * Contains \Intelisys\PhpEws\Enumeration\SearchPageDirectionType.
 */

namespace Intelisys\PhpEws\Enumeration;

use \Intelisys\PhpEws\Enumeration;

/**
 * Defines the direction for pagination in a search result.
 *
 * @package php-ews\Enumeration
 */
class SearchPageDirectionType extends Enumeration
{
    /**
     * Move to the next page in the result set.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const NEXT = 'Next';

    /**
     * Move to the previous page in the result set.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PREVIOUS = 'Previous';
}
