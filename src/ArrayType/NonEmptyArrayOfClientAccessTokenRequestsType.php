<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfClientAccessTokenRequestsType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of token requests.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfClientAccessTokenRequestsType extends ArrayType
{
    /**
     * Specifies a single token request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\ClientAccessTokenRequestType
     */
    public $TokenRequest = array();
}
