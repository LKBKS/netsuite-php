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

class InventoryTransferInventory {
    public $line;
    public $item;
    public $description;
    public $units;
    public $quantityOnHand;
    public $adjustQtyBy;
    public $serialNumbers;
    public $fromBinNumbers;
    public $toBinNumbers;
    public $inventoryDetail;
    public $customFieldList;
    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "description" => "string",
        "units" => "RecordRef",
        "quantityOnHand" => "float",
        "adjustQtyBy" => "float",
        "serialNumbers" => "string",
        "fromBinNumbers" => "string",
        "toBinNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "customFieldList" => "CustomFieldList",
    );
}
