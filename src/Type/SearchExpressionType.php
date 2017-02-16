<?php
/**
 * Contains \Intelisys\PhpEws\Type\SearchExpressionType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the substituted element within a restriction.
 *
 * @package php-ews\Type
 *
 * @todo Determine which classes need to extend this.
 */
abstract class SearchExpressionType extends Type
{
    /**
     * Identifies MAPI properties.
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
