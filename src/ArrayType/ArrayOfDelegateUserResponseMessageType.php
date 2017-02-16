<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfDelegateUserResponseMessageType.
 */

namespace Intelisys\PhpEws\ArrayType;

use Intelisys\PhpEws\ArrayType;

/**
 * Contains the response messages for an Exchange Web Services delegate
 * management request.
 *
 * @package php-ews\Array
 */
class ArrayOfDelegateUserResponseMessageType extends ArrayType
{
    /**
     * Contains response messages for delegate management operations.
     *
     * @since Exchange 2007 SP1
     *
     * @var \Intelisys\PhpEws\Response\DelegateUserResponseMessageType[]
     */
    public $DelegateUserResponseMessageType = array();
}
