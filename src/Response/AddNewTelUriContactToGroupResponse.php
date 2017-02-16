<?php
/**
 * Contains \Intelisys\PhpEws\Response\AddNewTelUriContactToGroupResponse.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the result data for a AddNewTelUriContactToGroup request.
 *
 * @package php-ews\Response
 */
class AddNewTelUriContactToGroupResponse extends ResponseMessageType
{
    /**
     * Specifies a set of persona data returned by a
     * AddNewTelUriContactToGroupType request.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PersonaType
     */
    public $Persona;
}
