<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetAppManifestsResponseType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response for a GetAppManifests operation request.
 *
 * @package php-ews\Response
 */
class GetAppManifestsResponseType extends ResponseMessageType
{
    /**
     * Contains information about all the XML manifest files for apps installed
     * in a mailbox.
     *
     * @since Exchange 2013 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfAppsType
     */
    public $Apps;

    /**
     * Contains a collection of base64-encoded app manifests that are installed
     * for the email account.
     *
     * @since Exchange 2013 SP1
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfAppManifestsType
     */
    public $Manifests;
}
