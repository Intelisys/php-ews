<?php
/**
 * Contains \Intelisys\PhpEws\Type\GroupByType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Defines an arbitrary grouping for FindItem queries.
 *
 * @package php-ews\Type
 */
class GroupByType extends BaseGroupByType
{
    /**
     * Represents the field that is used to determine the order of groups in a
     * response.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\AggregateOnType
     */
    public $AggregateOn;

    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
