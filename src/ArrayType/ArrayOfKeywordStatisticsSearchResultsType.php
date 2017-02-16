<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfKeywordStatisticsSearchResultsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines a list of one or more KeywordStat elements.
 *
 * @package php-ews\Array
 */
class ArrayOfKeywordStatisticsSearchResultsType extends ArrayType
{
    /**
     * Specifies keyword statistic information.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\KeywordStatisticsSearchResultType[]
     */
    public $KeywordStat = array();
}
