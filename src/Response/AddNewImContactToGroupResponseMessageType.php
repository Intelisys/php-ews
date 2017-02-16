<?php
/**
 * Contains \Intelisys\PhpEws\Response\AddNewImContactToGroupResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines a response to an AddNewImContactToGroup request.
 *
 * @package php-ews\Response
 */
class AddNewImContactToGroupResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies a set of persona data.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\PersonaType
     */
    public $Persona;
}
