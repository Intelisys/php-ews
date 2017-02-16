<?php
/**
 * Contains \Intelisys\PhpEws\Response\DelegateUserResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * contains the response message for a single delegate user.
 *
 * @package php-ews\Response
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{
    /**
     * Identifies a single delegate that is returned in a delegate management
     * response.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Type\DelegateUserType
     */
    public $DelegateUser;
}
