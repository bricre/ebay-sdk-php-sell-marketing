<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for specifying the criterion (selection rule)
 * settings of an ad campaign.
 */
class CampaignCriterion extends AbstractModel
{
    /**
     * Reserved for future use.
     *
     * @var bool
     */
    public $autoSelectFutureInventory = null;

    /**
     * This enum defines the criterion (selection rule) types. Currently, the only
     * criterion type supported is INVENTORY_PARTITION, and you must specify this value
     * if you manage your items with the Inventory API and you want to include items
     * based on their inventory reference IDs. Leave this field blank if you want to
     * create campaign ads based on listing IDs. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:CriterionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $criterionType = null;

    /**
     * Set of rules that selects the listings to include in the campaign. The following
     * rules apply to the selection rules: Each set of selection rules are ORed with
     * each other. Individual rules within a selection rule set are ANDed with each
     * other. If a rule has a list of values (such a list of category IDs), the item
     * need match only one of the values of the rule in order to be included in the
     * campaign. Note: If an item matches multiple sets of rules or multiple rules
     * within a selection rule set, the item is considered only once.Maximum number of
     * rules: 10.
     *
     * @var \Ebay\Sell\Marketing\Model\SelectionRule[]
     */
    public $selectionRules = null;
}
