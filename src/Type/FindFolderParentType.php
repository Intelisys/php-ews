<?php
/**
 * Contains \Intelisys\PhpEws\Type\FindFolderParentType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the results of a search of a single root folder during a
 * FindFolder operation.
 *
 * @package php-ews\Type
 *
 * @todo Create a FindResponsePagingAttributes trait.
 */
class FindFolderParentType extends Type
{
    /**
     * Represents the next denominator to use for the next request when you are
     * using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * Contains an array of folders found by using the FindFolder operation.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfFoldersType
     */
    public $Folders;

    /**
     * Indicates whether the current results contain the last item in the query
     * so that additional paging is not needed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Represents the next index that should be used for the next request when
     * you are using an indexed page view.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $IndexedPagingOffset;

    /**
     * Represents the new numerator value to use for the next request when you
     * are using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * Represents the total number of items in the view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView;
}
