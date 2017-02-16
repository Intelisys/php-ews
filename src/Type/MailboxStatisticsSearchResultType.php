<?php
/**
 * Contains \Intelisys\PhpEws\Type\MailboxStatisticsSearchResultType.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Represents the results of a keyword search.
 *
 * @package php-ews\Type
 */
class MailboxStatisticsSearchResultType extends Type
{
    /**
     * Contains a single keyword search result.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\KeywordStatisticsSearchResultType
     */
    public $KeywordStatisticsSearchResult;

    /**
     * Identifies the user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\UserMailboxType
     */
    public $UserMailbox;
}
