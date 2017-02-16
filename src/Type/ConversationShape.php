<?php
/**
 * Contains \Intelisys\PhpEws\Type\ConversationShape.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies the property set to return in a FindConversation operation
 * response.
 *
 * @package php-ews\Type
 */
class ConversationShape extends Type
{
    /**
     * Identifies additional properties for use in the request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the set of properties to return in the response.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
