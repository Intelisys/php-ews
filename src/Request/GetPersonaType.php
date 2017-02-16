<?php
/**
 * Contains \Intelisys\PhpEws\Request\GetPersonaType.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines a request to get a persona.
 *
 * @package php-ews\Request
 */
class GetPersonaType extends BaseRequestType
{
    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     *
     * @todo Update once documentation exists.
     */
    public $AdditionalProperties;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     *
     * @todo Update once documentation exists.
     */
    public $EmailAddress;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    public $ItemLinkId;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \Intelisys\PhpEws\Type\TargetFolderIdType
     *
     * @todo Update once documentation exists.
     */
    public $ParentFolderId;

    /**
     * Specifies the persona identifier for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType
     */
    public $PersonaId;
}
