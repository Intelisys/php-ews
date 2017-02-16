<?php
/**
 * Contains \Intelisys\PhpEws\Type\RequestServerVersion.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Defines the Microsoft Exchange Server version of a request.
 *
 * @package php-ews\Type
 */
class RequestServerVersion extends Type
{
    /**
     * Identifies the Exchange Server version used in the request.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\ExchangeVersionType
     */
    public $Version;
}
