<?php
/**
 * Contains \Intelisys\PhpEws\Type\PreviewItemResponseShapeType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines the requested property set to be returned in a discovery search.
 *
 * @package php-ews\Type
 */
class PreviewItemResponseShapeType extends Type
{
    /**
     * Identifies additional properties.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Specifies either the default preview with all properties returned or a
     * compact preview with fewer properties returned.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\PreviewItemBaseShapeType
     */
    public $BaseShape;
}
