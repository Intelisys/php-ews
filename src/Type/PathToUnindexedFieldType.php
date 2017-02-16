<?php
/**
 * Contains \Intelisys\PhpEws\Type\PathToUnindexedFieldType.
 */

namespace Intelisys\PhpEws\Type;

/**
 * Identifies frequently referenced properties by URI.
 *
 * @package php-ews\Type
 */
class PathToUnindexedFieldType extends BasePathToElementType
{
    /**
     * Identifies the URI of the property.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\UnindexedFieldURIType
     */
    public $FieldURI;
}
