<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetUserRetentionPolicyTagsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to a GetRetentionPolicyTags request.
 *
 * @package php-ews\Response
 */
class GetUserRetentionPolicyTagsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a list of retention tags.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfRetentionPolicyTagsType
     */
    public $RetentionPolicyTags;
}
