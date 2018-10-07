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
 * generated:  2018-10-07 04:06:59 AM UTC
 */

namespace NetSuite\Classes;

class SerializedAssemblyItemBillOfMaterials {
    public $billOfMaterials;
    public $currentRevision;
    public $masterDefault;
    public $defaultForLocationList;
    public $inactive;
    public $memo;
    static $paramtypesmap = array(
        "billOfMaterials" => "RecordRef",
        "currentRevision" => "string",
        "masterDefault" => "boolean",
        "defaultForLocationList" => "RecordRefList",
        "inactive" => "string",
        "memo" => "string",
    );
}