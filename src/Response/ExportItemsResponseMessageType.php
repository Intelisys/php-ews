<?php
/**
 * Contains \Intelisys\PhpEws\Response\ExportItemsResponseMessageType.
 */

namespace Intelisys\PhpEws\Response;

/**
 * Represents the status and results of a request to export a single mailbox
 * item.
 *
 * @package php-ews\Response
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the item identifier of an exported item.
     *
     * @since Exchange 2010 SP1
     *
     * @var \Intelisys\PhpEws\Type\ItemIdType
     */
    public $ItemId;

    /**
     * Contains the contents of an exported item.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $Data;
}
