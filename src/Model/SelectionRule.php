<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type specifies the selection rules used to create a campaign.
 */
class SelectionRule extends AbstractModel
{
    /**
     * A list of the brands of the items to be included in the campaign.
     *
     * @var string[]
     */
    public $brands = null;

    /**
     * A list of category IDs associated with the listings to be included in the
     * campaign. Ada are created for all the seller's items listed in the specified
     * categories, up to a maximum of 50,000 items. The IDs can be either a list of
     * eBay category IDs (from the site where the item is hosted), or a list of
     * category IDs defined and used by the seller's store. eBay Marketplace category
     * IDs To get a list of marketplace category IDs, do one of the following: Get a
     * list of category IDs for a marketplace by adding
     * /sch/allcategories/all-categories to the marketplace URL when browsing the site.
     * For example: http://www.ebay.com.au/sch/allcategories/all-categories Navigate to
     * the desired category on the host site and copy the category ID from the URL.
     * These options are also available for the US marketplace: See Category Changes
     * for the latest list of category IDs. Retrieve a list of category IDs using the
     * Taxonomy API. Seller store category IDs Because store category IDs are uniquely
     * defined and maintained by each seller, this service cannot provide a list of a
     * seller's IDs. However, sellers can retrieve their store category IDs as follows:
     * Go to Seller Hub &gt; Marketing. Click Manage store categories. A list of your
     * store categories displays. Click the All categories link displayed at the bottom
     * of the list. A complete list of your store categories and their associated store
     * category IDs displays.
     *
     * @var string[]
     */
    public $categoryIds = null;

    /**
     * Indicates the source of the category ID; eBay or seller's store. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CategoryScopeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $categoryScope = null;

    /**
     * The ID of the listing's condition. For more information, see Item condition ID
     * and name values. Note: As of September 1, 2021, condition ID 2500 ('Seller
     * Refurbished') is no longer a valid item condition in the Cell Phones &amp;
     * Smartphones category (category ID 9355) for the following marketplaces: US,
     * Canada, UK, Germany, and Australia. This refurbished item condition has been
     * replaced by three new refurbished values, which include 'Excellent -
     * Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020),
     * and 'Good - Refurbished' (condition ID 2030). Note: In all eBay marketplaces,
     * Condition ID 2000 now maps to an item condition of 'Certified - Refurbished',
     * and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished',
     * a seller must be pre-qualified by eBay for this feature.
     *
     * @var string[]
     */
    public $listingConditionIds = null;

    /**
     * The maximum price of the listings included in the campaign.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $maxPrice = null;

    /**
     * The minimum price of the listings included in the campaign.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $minPrice = null;
}
