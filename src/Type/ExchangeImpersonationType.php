<?php
/**
 * Contains \Intelisys\PhpEws\Type\ExchangeImpersonationType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the account to impersonate within a request.
 *
 * @package php-ews\Type
 */
class ExchangeImpersonationType extends Type
{
    /**
     * Represents an account to impersonate when you are using the
     * ExchangeImpersonation SOAP header.
     *
     * @since Exchange 2007
     *
     * @var \Intelisys\PhpEws\Type\ConnectingSIDType
     */
    public $ConnectingSID;
}
