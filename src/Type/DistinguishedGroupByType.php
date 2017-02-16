<?php
/**
 * Contains \Intelisys\PhpEws\Type\DistinguishedGroupByType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Represents standard groupings for FindItem queries.
 *
 * @package php-ews\Type
 */
class DistinguishedGroupByType extends BaseGroupByType
{
    /**
     * Represents the standard grouping and aggregating mechanisms for a grouped
     * FindItem operation.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\StandardGroupByType
     */
    public $StandardGroupBy;
}
