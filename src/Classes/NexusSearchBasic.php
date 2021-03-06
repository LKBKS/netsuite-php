<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2018-10-07 03:37:44 AM UTC
 */

namespace NetSuite\Classes;

class NexusSearchBasic extends SearchRecordBasic {
    public $country;
    public $description;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $parentNexus;
    public $state;
    public $taxAgency;
    static $paramtypesmap = array(
        "country" => "SearchEnumMultiSelectField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "parentNexus" => "SearchMultiSelectField",
        "state" => "SearchMultiSelectField",
        "taxAgency" => "SearchMultiSelectField",
    );
}
