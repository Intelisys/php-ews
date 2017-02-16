<?php
/**
 * Contains \Intelisys\PhpEws\Type\ClientAccessTokenRequestType.
 */

namespace Intelisys\PhpEws\Type;

use Intelisys\PhpEws\Type;

/**
 * Defines a single token request.
 *
 * @package php-ews\Type
 */
class ClientAccessTokenRequestType extends Type
{
    /**
     * Specifies the identifier of an app.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Id;

    /**
     * Specifies a token scope.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Scope;

    /**
     * Identifies the type of client access token.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \Intelisys\PhpEws\Enumeration\ClientAccessTokenTypeType
     */
    public $TokenType;
}
