<?php
/**
 * Contains \Intelisys\PhpEws\Type\SmtpDomainList.
 */

namespace Intelisys\PhpEws\Type;

use \Intelisys\PhpEws\Type;

/**
 * Identifies a list of internal SMTP domains of the organization.
 *
 * @package php-ews\Type
 */
class SmtpDomainList extends Type
{
    /**
     * Identifies a single SMTP domain.
     *
     * @since Exchange 2010
     *
     * @var \Intelisys\PhpEws\Type\SmtpDomain
     */
    public $Domain;
}
