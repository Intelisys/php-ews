<?php
/**
 * Contains \Intelisys\PhpEws\Request\SetUserOofSettingsRequest.
 */

namespace Intelisys\PhpEws\Request;

/**
 * Defines the arguments used to set a mailbox user's Out of Office (OOF)
 * settings.
 *
 * @package php-ews\Request
 */
class SetUserOofSettingsRequest extends BaseRequestType
{
    /**
     * Identifies the mailbox user for a SetUserOofSettings or
     * GetUserOofSettings request.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;

    /**
     * Specifies the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\UserOofSettings
     */
    public $UserOofSettings;
}
