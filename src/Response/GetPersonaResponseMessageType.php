<?php
/**
 * Contains \Intelisys\PhpEws\Response\GetPersonaResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response for a GetPersona request.
 *
 * @package php-ews\Response
 */
class GetPersonaResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies a set of persona data returned by a GetPersona request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PersonaType
     */
    public $Persona;
}
