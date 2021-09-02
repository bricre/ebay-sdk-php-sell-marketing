<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\BaseResponse as BaseResponse;
use Ebay\Sell\Marketing\Model\ItemPromotion as ItemPromotionModel;
use Ebay\Sell\Marketing\Model\ItemPromotionResponse as ItemPromotionResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ItemPromotion extends AbstractAPI
{
    /**
     * This method creates an item promotion, where the buyer receives a discount when
     * they meet the buying criteria that's set for the promotion. Known here as
     * &quot;threshold promotions&quot;, these promotions trigger when a threshold is
     * met. eBay highlights promoted items by placing teasers for the promoted items
     * throughout the online buyer flows. Discounts are specified as either a monetary
     * amount or a percentage off the standard sales price of a listing, letting you
     * offer deals such as &quot;Buy 1 Get 1&quot; and &quot;Buy $50, get 20%
     * off&quot;. Volume pricing promotions increase the value of the discount as the
     * buyer increases the quantity they purchase. Coded Coupons provide unique codes
     * that a buyer can use during checkout to receive a discount. The seller can
     * specify the number of times a buyer can use the coupon and the maximum amount
     * across all purchases that can be discounted using the coupon. The coupon code
     * can also be made public (appearing on the seller&rsquo;s Offer page, search
     * pages, the item listing, and the checkout page) or private (only on the
     * seller&rsquo;s Offer page, but the seller can include the code in email and
     * social media). Note: Coded Coupons are currently available in the US, UK, DE,
     * FR, IT, ES, and AU marketplaces. There are two ways to add items to a threshold
     * promotion: Key-based promotions select items using either the listing IDs or
     * inventory reference IDs of the items you want to promote. Note that if you use
     * inventory reference IDs, you must specify both the inventoryReferenceId and the
     * associated inventoryReferenceType of the item(s) you want to include the
     * promotion. Rule-based promotions select items using a list of eBay category IDs
     * or seller Store category IDs. Rules can further constrain items in a promotion
     * by minimum and maximum prices, brands, and item conditions. You must create a
     * new promotion in either a DRAFT or SCHEDULED state. Use the DRAFT state when you
     * are initially creating a promotion and you want to be sure it's correctly
     * configured before scheduling it to run. When you create a promotion, the
     * promotion ID is returned in the Location response header. Use this ID to
     * reference the promotion in subsequent requests. Tip: Refer to the Selling
     * Integration Guide for details and examples showing how to create and manage
     * threshold promotions using the Promotions Manager. For information on the eBay
     * marketplaces that support item promotions, see Promotions Manager requirements
     * and restrictions.
     *
     * @param ItemPromotionModel $Model this type defines the fields that describe an
     *                                  item promotion
     *
     * @return BaseResponse
     */
    public function create(ItemPromotionModel $Model): BaseResponse
    {
        return $this->client->request('createItemPromotion', 'POST', 'item_promotion',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method returns the complete details of the threshold promotion specified by
     * the promotion_id path parameter. Call getPromotions to retrieve the IDs of a
     * seller's promotions.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to retrieve plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an
     *                             &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique
     *                             eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. Example: 1********5@EBAY_US
     *
     * @return ItemPromotionResponse
     */
    public function get(string $promotion_id): ItemPromotionResponse
    {
        return $this->client->request('getItemPromotion', 'GET', "item_promotion/{$promotion_id}",
            [
            ]
        );
    }

    /**
     * This method updates the specified threshold promotion with the new configuration
     * that you supply in the request. Indicate the promotion you want to update using
     * the promotion_id path parameter. Call getPromotions to retrieve the IDs of a
     * seller's promotions. When updating a promotion, supply all the fields that you
     * used to configure the original promotion (and not just the fields you are
     * updating). eBay replaces the specified promotion with the values you supply in
     * the update request and if you don't pass a field that currently has a value, the
     * update request will fail. The parameters you are allowed to update with this
     * request depend on the status of the promotion you're updating: DRAFT or
     * SCHEDULED promotions: You can update any of the parameters in these promotions
     * that have not yet started to run, including the discountRules. RUNNING or PAUSED
     * promotions: You can change the endDate and the item's inventory but you cannot
     * change the promotional discount or the promotion's start date. ENDED promotions:
     * Nothing can be changed. Tip: When updating a RUNNING or PAUSED promotion, set
     * the status field to SCHEDULED for the update request. When the promotion is
     * updated, the previous status (either RUNNING or PAUSED) is retained.
     *
     * @param string             $promotion_id This path parameter takes a concatenation of the ID
     *                                         of the promotion you want to update plus the marketplace ID on which the
     *                                         promotion is hosted. Concatenate the two values by separating them with an
     *                                         &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique
     *                                         eBay-assigned value that's generated when the promotion is created. The
     *                                         Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                                         hosted. Example: 1********5@EBAY_US
     * @param ItemPromotionModel $Model        this type defines the fields that describe an
     *                                         item promotion
     *
     * @return BaseResponse
     */
    public function update(string $promotion_id, ItemPromotionModel $Model): BaseResponse
    {
        return $this->client->request('updateItemPromotion', 'PUT', "item_promotion/{$promotion_id}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes the threshold promotion specified by the promotion_id path
     * parameter. Call getPromotions to retrieve the IDs of a seller's promotions. You
     * can delete any promotion with the exception of those that are currently active
     * (RUNNING). To end a running threshold promotion, call updateItemPromotion and
     * adjust the endDate field as appropriate.
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
    public function delete(string $promotion_id)
    {
        return $this->client->request('deleteItemPromotion', 'DELETE', "item_promotion/{$promotion_id}",
            [
            ]
        );
    }
}
