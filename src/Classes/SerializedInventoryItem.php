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

class SerializedInventoryItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $matrixType;
    public $includeChildren;
    public $vendorName;
    public $parent;
    public $isOnline;
    public $isHazmatItem;
    public $hazmatId;
    public $hazmatShippingName;
    public $hazmatHazardClass;
    public $hazmatPackingGroup;
    public $hazmatItemUnits;
    public $hazmatItemUnitsQty;
    public $isGcoCompliant;
    public $offerSupport;
    public $isInactive;
    public $availableToPartners;
    public $department;
    public $class;
    public $location;
    public $costingMethod;
    public $subsidiaryList;
    public $purchaseDescription;
    public $copyDescription;
    public $issueProduct;
    public $currency;
    public $cogsAccount;
    public $intercoCogsAccount;
    public $vendor;
    public $salesDescription;
    public $lastInvtCountDate;
    public $nextInvtCountDate;
    public $invtCountInterval;
    public $invtClassification;
    public $incomeAccount;
    public $intercoIncomeAccount;
    public $isTaxable;
    public $taxSchedule;
    public $dropshipExpenseAccount;
    public $revenueRecognitionRule;
    public $revRecForecastRule;
    public $revenueAllocationGroup;
    public $createRevenuePlansOn;
    public $directRevenuePosting;
    public $assetAccount;
    public $matchBillToReceipt;
    public $billQtyVarianceAcct;
    public $billPriceVarianceAcct;
    public $billExchRateVarianceAcct;
    public $gainLossAccount;
    public $shippingCost;
    public $handlingCost;
    public $weight;
    public $costingMethodDisplay;
    public $shippingCostUnits;
    public $handlingCostUnits;
    public $unitsType;
    public $stockUnit;
    public $purchaseUnit;
    public $saleUnit;
    public $minimumQuantityUnits;
    public $safetyStockLevelUnits;
    public $billingSchedule;
    public $trackLandedCost;
    public $matrixItemNameTemplate;
    public $isDropShipItem;
    public $isSpecialOrderItem;
    public $stockDescription;
    public $deferredRevenueAccount;
    public $producer;
    public $manufacturer;
    public $revRecSchedule;
    public $mpn;
    public $multManufactureAddr;
    public $manufacturerAddr1;
    public $manufacturerCity;
    public $manufacturerState;
    public $manufacturerZip;
    public $countryOfManufacture;
    public $defaultItemShipMethod;
    public $itemCarrier;
    public $roundUpAsComponent;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $itemShipMethodList;
    public $manufacturerTaxId;
    public $scheduleBNumber;
    public $scheduleBQuantity;
    public $scheduleBCode;
    public $manufacturerTariff;
    public $preferenceCriterion;
    public $minimumQuantity;
    public $enforceMinQtyInternally;
    public $shipPackage;
    public $shipIndividually;
    public $softDescriptor;
    public $costCategory;
    public $pricesIncludeTax;
    public $quantityPricingSchedule;
    public $useMarginalRates;
    public $costEstimateType;
    public $costEstimate;
    public $transferPrice;
    public $overallQuantityPricingType;
    public $pricingGroup;
    public $preferredLocation;
    public $isStorePickupAllowed;
    public $vsoePrice;
    public $vsoeSopGroup;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $itemRevenueCategory;
    public $cost;
    public $costUnits;
    public $quantityReorderUnits;
    public $reorderMultiple;
    public $totalValue;
    public $useBins;
    public $leadTime;
    public $autoLeadTime;
    public $autoReorderPoint;
    public $autoPreferredStockLevel;
    public $preferredStockLevelDays;
    public $averageCost;
    public $safetyStockLevel;
    public $lastPurchasePrice;
    public $safetyStockLevelDays;
    public $backwardConsumptionDays;
    public $seasonalDemand;
    public $demandModifier;
    public $storeDisplayName;
    public $storeDisplayThumbnail;
    public $weightUnit;
    public $weightUnits;
    public $storeDisplayImage;
    public $storeDescription;
    public $storeDetailedDescription;
    public $storeItemTemplate;
    public $pageTitle;
    public $metaTagHtml;
    public $excludeFromSitemap;
    public $sitemapPriority;
    public $searchKeywords;
    public $isDonationItem;
    public $showDefaultDonationAmount;
    public $maxDonationAmount;
    public $shoppingDotComCategory;
    public $shopzillaCategoryId;
    public $nexTagCategory;
    public $quantityOnHand;
    public $quantityOnHandUnits;
    public $onHandValueMli;
    public $serialNumbers;
    public $reorderPoint;
    public $preferredStockLevel;
    public $reorderPointUnits;
    public $defaultReturnCost;
    public $supplyReplenishmentMethod;
    public $alternateDemandSourceItem;
    public $fixedLotSize;
    public $periodicLotSizeType;
    public $supplyType;
    public $demandTimeFence;
    public $supplyTimeFence;
    public $rescheduleInDays;
    public $rescheduleOutDays;
    public $periodicLotSizeDays;
    public $supplyLotSizingMethod;
    public $forwardConsumptionDays;
    public $demandSource;
    public $quantityOnOrder;
    public $preferredStockLevelUnits;
    public $quantityCommitted;
    public $quantityAvailable;
    public $quantityBackOrdered;
    public $purchaseTaxCode;
    public $purchasePriceVarianceAcct;
    public $rate;
    public $salesTaxCode;
    public $onSpecial;
    public $dontShowPrice;
    public $noPriceMessage;
    public $outOfStockMessage;
    public $specialsDescription;
    public $outOfStockBehavior;
    public $relatedItemsDescription;
    public $featuredDescription;
    public $productFeedList;
    public $urlComponent;
    public $itemOptionsList;
    public $matrixOptionList;
    public $itemVendorList;
    public $pricingMatrix;
    public $accountingBookDetailList;
    public $itemNumberOptionsList;
    public $numbersList;
    public $binNumberList;
    public $siteCategoryList;
    public $locationsList;
    public $translationsList;
    public $presentationItemList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "matrixType" => "ItemMatrixType",
        "includeChildren" => "boolean",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costingMethod" => "ItemCostingMethod",
        "subsidiaryList" => "RecordRefList",
        "purchaseDescription" => "string",
        "copyDescription" => "boolean",
        "issueProduct" => "RecordRef",
        "currency" => "string",
        "cogsAccount" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "vendor" => "RecordRef",
        "salesDescription" => "string",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "taxSchedule" => "RecordRef",
        "dropshipExpenseAccount" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "weight" => "float",
        "costingMethodDisplay" => "string",
        "shippingCostUnits" => "string",
        "handlingCostUnits" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "minimumQuantityUnits" => "string",
        "safetyStockLevelUnits" => "string",
        "billingSchedule" => "RecordRef",
        "trackLandedCost" => "boolean",
        "matrixItemNameTemplate" => "string",
        "isDropShipItem" => "boolean",
        "isSpecialOrderItem" => "boolean",
        "stockDescription" => "string",
        "deferredRevenueAccount" => "RecordRef",
        "producer" => "boolean",
        "manufacturer" => "string",
        "revRecSchedule" => "RecordRef",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufacturerAddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "ScheduleBCode",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "shipPackage" => "RecordRef",
        "shipIndividually" => "boolean",
        "softDescriptor" => "RecordRef",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "cost" => "float",
        "costUnits" => "string",
        "quantityReorderUnits" => "string",
        "reorderMultiple" => "integer",
        "totalValue" => "float",
        "useBins" => "boolean",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "averageCost" => "float",
        "safetyStockLevel" => "float",
        "lastPurchasePrice" => "float",
        "safetyStockLevelDays" => "integer",
        "backwardConsumptionDays" => "integer",
        "seasonalDemand" => "boolean",
        "demandModifier" => "float",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "quantityOnHand" => "float",
        "quantityOnHandUnits" => "string",
        "onHandValueMli" => "float",
        "serialNumbers" => "string",
        "reorderPoint" => "float",
        "preferredStockLevel" => "float",
        "reorderPointUnits" => "string",
        "defaultReturnCost" => "float",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "periodicLotSizeType" => "PeriodicLotSizeType",
        "supplyType" => "RecordRef",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
        "periodicLotSizeDays" => "integer",
        "supplyLotSizingMethod" => "RecordRef",
        "forwardConsumptionDays" => "integer",
        "demandSource" => "RecordRef",
        "quantityOnOrder" => "float",
        "preferredStockLevelUnits" => "string",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "purchaseTaxCode" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "onSpecial" => "boolean",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "specialsDescription" => "string",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "relatedItemsDescription" => "string",
        "featuredDescription" => "string",
        "productFeedList" => "ProductFeedList",
        "urlComponent" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "itemNumberOptionsList" => "RecordRefList",
        "numbersList" => "SerializedInventoryItemNumbersList",
        "binNumberList" => "InventoryItemBinNumberList",
        "siteCategoryList" => "SiteCategoryList",
        "locationsList" => "SerializedInventoryItemLocationsList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
