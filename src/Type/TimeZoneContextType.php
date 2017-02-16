<?php
/**
 * Contains \Intelisys\PhpEws\Type\TimeZoneContextType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Defines the time zone definition that is to be used as the default when
 * assigning the time zone for the DateTime properties of objects that are
 * created, updated, and retrieved by using Exchange Web Services (EWS).
 *
 * @package php-ews\Type
 */
class TimeZoneContextType extends Type
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
