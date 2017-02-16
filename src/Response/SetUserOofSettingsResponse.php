<?php
/**
 * Contains \Intelisys\PhpEws\Response\SetUserOofSettingsResponse.
 */

namespace Intelisys\PhpEws\Response;

use \Intelisys\PhpEws\Response;

/**
 * Defines the result of a SetUserOofSettingsRequest message attempt.
 *
 * @package php-ews\Response
 */
class SetUserOofSettingsResponse extends Response
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;
}
