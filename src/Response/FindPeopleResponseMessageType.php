<?php
/**
 * Contains \Intelisys\PhpEws\Response\FindPeopleResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Defines the response to a FindPeople request.
 *
 * @package php-ews\Response
 */
class FindPeopleResponseMessageType extends ResponseMessageType
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $FirstLoadedRowIndex;

    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $FirstMatchingRowIndex;

    /**
     * Specifies an array of persona data.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\ArrayType\ArrayOfPeopleType
     */
    public $People;

    /**
     * Specifies the total number of personas stored on a server that are
     * returned by a FindPeople request.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $TotalNumberOfPeopleInView;

    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $TransactionId;
}
