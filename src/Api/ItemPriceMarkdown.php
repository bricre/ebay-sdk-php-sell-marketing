<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\ItemPriceMarkdown as ItemPriceMarkdownModel;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ItemPriceMarkdown extends AbstractAPI
{
    /**
     * This method creates an item price markdown promotion (know simply as a
     * &quot;markdown promotion&quot;) where a discount amount is applied directly to
     * the items included the promotion. Discounts can be specified as either a
     * monetary amount or a percentage off the standard sales price. eBay highlights
     * promoted items by placing teasers for the items throughout the online sales
     * flows. Unlike an item promotion, a markdown promotion does not require the buyer
     * meet a &quot;threshold&quot; before the offer takes effect. With markdown
     * promotions, all the buyer needs to do is purchase the item to receive the
     * promotion benefit. Important: There are some restrictions for which listings are
     * available for price markdown promotions. For details, see Promotions Manager
     * requirements and restrictions. In addition, we recommend you list items at
     * competitive prices before including them in your markdown promotions. For an
     * extensive list of pricing recommendations, see the Growth tab in Seller Hub.
     * There are two ways to add items to markdown promotions: Key-based promotions
     * select items using either the listing IDs or inventory reference IDs of the
     * items you want to promote. Note that if you use inventory reference IDs, you
     * must specify both the inventoryReferenceId and the associated
     * inventoryReferenceType of the item(s) you want to include the promotion.
     * Rule-based promotions select items using a list of eBay category IDs or seller
     * Store category IDs. Rules can further constrain items in a promotion by minimum
     * and maximum prices, brands, and item conditions. New promotions must be created
     * in either a DRAFT or a SCHEDULED state. Use the DRAFT state when you are
     * initially creating a promotion and you want to be sure it's correctly configured
     * before scheduling it to run. When you create a promotion, the promotion ID is
     * returned in the Location response header. Use this ID to reference the promotion
     * in subsequent requests (such as to schedule a promotion that's in a DRAFT
     * state). Tip: Refer to Promotions Manager in the Selling Integration Guide for
     * details and examples showing how to create and manage seller promotions.
     * Markdown promotions are available on all eBay marketplaces. For more
     * information, see Promotions Manager requirements and restrictions.
     *
     * @param ItemPriceMarkdownModel $Model this type defines the fields that describe
     *                                      an item price markdown promotion
     *
     * @return object
     */
    public function createPromotion(ItemPriceMarkdownModel $Model): object
    {
        return $this->client->request('createItemPriceMarkdownPromotion', 'POST', 'item_price_markdown',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method returns the complete details of the item price markdown promotion
     * that's indicated by the promotion_id path parameter. Call getPromotions to
     * retrieve the IDs of a seller's promotions.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to get plus the marketplace ID on which the promotion
     *                             is hosted. Concatenate the two values by separating them with an &quot;at
     *                             sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned
     *                             value that's generated when the promotion is created. The Marketplace ID is the
     *                             ENUM value of eBay marketplace where the promotion is hosted. Example:
     *                             1********5@EBAY_US
     *
     * @return ItemPriceMarkdownModel
     */
    public function getPromotion(string $promotion_id): ItemPriceMarkdownModel
    {
        return $this->client->request('getItemPriceMarkdownPromotion', 'GET', "item_price_markdown/{$promotion_id}",
            [
            ]
        );
    }

    /**
     * This method updates the specified item price markdown promotion with the new
     * configuration that you supply in the payload of the request. Specify the
     * promotion you want to update using the promotion_id path parameter. Call
     * getPromotions to retrieve the IDs of a seller's promotions. When updating a
     * promotion, supply all the fields that you used to configure the original
     * promotion (and not just the fields you are updating). eBay replaces the
     * specified promotion with the values you supply in the update request and if you
     * don't pass a field that currently has a value, the update request fails. The
     * parameters you are allowed to update with this request depend on the status of
     * the promotion you're updating: DRAFT or SCHEDULED promotions: You can update any
     * of the parameters in these promotions that have not yet started to run,
     * including the discountRules. RUNNING promotions: You can change the endDate and
     * the item's inventory but you cannot change the promotional discount or the
     * promotion's start date. ENDED promotions: Nothing can be changed.
     *
     * @param string                 $promotion_id This path parameter takes a concatenation of the ID
     *                                             of the promotion you want to update plus the marketplace ID on which the
     *                                             promotion is hosted. Concatenate the two values by separating them with an
     *                                             &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique
     *                                             eBay-assigned value that's generated when the promotion is created. The
     *                                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                                             hosted. Example: 1********5@EBAY_US
     * @param ItemPriceMarkdownModel $Model        this type defines the fields that describe
     *                                             an item price markdown promotion
     *
     * @return object
     */
    public function updatePromotion(string $promotion_id, ItemPriceMarkdownModel $Model): object
    {
        return $this->client->request('updateItemPriceMarkdownPromotion', 'PUT', "item_price_markdown/{$promotion_id}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes the item price markdown promotion specified by the
     * promotion_id path parameter. Call getPromotions to retrieve the IDs of a
     * seller's promotions. You can delete any promotion with the exception of those
     * that are currently active (RUNNING). To end a running promotion, call
     * updateItemPriceMarkdownPromotion and adjust the endDate field as appropriate.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to delete plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an
     *                             &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique
     *                             eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. Example: 1********5@EBAY_US
     *
     * @return mixed
     */
    public function deletePromotion(string $promotion_id)
    {
        return $this->client->request('deleteItemPriceMarkdownPromotion', 'DELETE', "item_price_markdown/{$promotion_id}",
            [
            ]
        );
    }
}
