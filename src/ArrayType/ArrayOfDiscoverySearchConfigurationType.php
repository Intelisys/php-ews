<?php
/**
 * Contains \Intelisys\PhpEws\ArrayType\ArrayOfDiscoverySearchConfigurationType.
 */

namespace Intelisys\PhpEws\ArrayType;

use \Intelisys\PhpEws\ArrayType;

/**
 * Defines an array of DiscoverySearchConfiguration elements.
 *
 * @package php-ews\Array
 */
class ArrayOfDiscoverySearchConfigurationType extends ArrayType
{
    /**
     * Specifies the configuration for eDiscovery search.
     *
     * @since Exchange 2013
     *
     * @var \Intelisys\PhpEws\Type\DiscoverySearchConfigurationType[]
     */
    public $DiscoverySearchConfiguration = array();
}
