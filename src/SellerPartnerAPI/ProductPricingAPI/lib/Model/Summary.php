<?php
/**
 * Summary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Summary Class Doc Comment
 *
 * @category Class
 * @description Contains price information about the product, including the LowestPrices and BuyBoxPrices, the ListPrice, the SuggestedLowerPricePlusShipping, and NumberOfOffers and NumberOfBuyBoxEligibleOffers.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Summary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_offer_count' => 'int',
        'number_of_offers' => '\Swagger\Client\Model\NumberOfOffers',
        'lowest_prices' => '\Swagger\Client\Model\LowestPrices',
        'buy_box_prices' => '\Swagger\Client\Model\BuyBoxPrices',
        'list_price' => '\Swagger\Client\Model\MoneyType',
        'suggested_lower_price_plus_shipping' => '\Swagger\Client\Model\MoneyType',
        'buy_box_eligible_offers' => '\Swagger\Client\Model\BuyBoxEligibleOffers',
        'offers_available_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_offer_count' => 'int32',
        'number_of_offers' => null,
        'lowest_prices' => null,
        'buy_box_prices' => null,
        'list_price' => null,
        'suggested_lower_price_plus_shipping' => null,
        'buy_box_eligible_offers' => null,
        'offers_available_time' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_offer_count' => 'TotalOfferCount',
        'number_of_offers' => 'NumberOfOffers',
        'lowest_prices' => 'LowestPrices',
        'buy_box_prices' => 'BuyBoxPrices',
        'list_price' => 'ListPrice',
        'suggested_lower_price_plus_shipping' => 'SuggestedLowerPricePlusShipping',
        'buy_box_eligible_offers' => 'BuyBoxEligibleOffers',
        'offers_available_time' => 'OffersAvailableTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_offer_count' => 'setTotalOfferCount',
        'number_of_offers' => 'setNumberOfOffers',
        'lowest_prices' => 'setLowestPrices',
        'buy_box_prices' => 'setBuyBoxPrices',
        'list_price' => 'setListPrice',
        'suggested_lower_price_plus_shipping' => 'setSuggestedLowerPricePlusShipping',
        'buy_box_eligible_offers' => 'setBuyBoxEligibleOffers',
        'offers_available_time' => 'setOffersAvailableTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_offer_count' => 'getTotalOfferCount',
        'number_of_offers' => 'getNumberOfOffers',
        'lowest_prices' => 'getLowestPrices',
        'buy_box_prices' => 'getBuyBoxPrices',
        'list_price' => 'getListPrice',
        'suggested_lower_price_plus_shipping' => 'getSuggestedLowerPricePlusShipping',
        'buy_box_eligible_offers' => 'getBuyBoxEligibleOffers',
        'offers_available_time' => 'getOffersAvailableTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['total_offer_count'] = isset($data['total_offer_count']) ? $data['total_offer_count'] : null;
        $this->container['number_of_offers'] = isset($data['number_of_offers']) ? $data['number_of_offers'] : null;
        $this->container['lowest_prices'] = isset($data['lowest_prices']) ? $data['lowest_prices'] : null;
        $this->container['buy_box_prices'] = isset($data['buy_box_prices']) ? $data['buy_box_prices'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['suggested_lower_price_plus_shipping'] = isset($data['suggested_lower_price_plus_shipping']) ? $data['suggested_lower_price_plus_shipping'] : null;
        $this->container['buy_box_eligible_offers'] = isset($data['buy_box_eligible_offers']) ? $data['buy_box_eligible_offers'] : null;
        $this->container['offers_available_time'] = isset($data['offers_available_time']) ? $data['offers_available_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_offer_count'] === null) {
            $invalidProperties[] = "'total_offer_count' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets total_offer_count
     *
     * @return int
     */
    public function getTotalOfferCount()
    {
        return $this->container['total_offer_count'];
    }

    /**
     * Sets total_offer_count
     *
     * @param int $total_offer_count The number of unique offers contained in NumberOfOffers.
     *
     * @return $this
     */
    public function setTotalOfferCount($total_offer_count)
    {
        $this->container['total_offer_count'] = $total_offer_count;

        return $this;
    }

    /**
     * Gets number_of_offers
     *
     * @return \Swagger\Client\Model\NumberOfOffers
     */
    public function getNumberOfOffers()
    {
        return $this->container['number_of_offers'];
    }

    /**
     * Sets number_of_offers
     *
     * @param \Swagger\Client\Model\NumberOfOffers $number_of_offers A list that contains the total number of offers for the item for the given conditions and fulfillment channels.
     *
     * @return $this
     */
    public function setNumberOfOffers($number_of_offers)
    {
        $this->container['number_of_offers'] = $number_of_offers;

        return $this;
    }

    /**
     * Gets lowest_prices
     *
     * @return \Swagger\Client\Model\LowestPrices
     */
    public function getLowestPrices()
    {
        return $this->container['lowest_prices'];
    }

    /**
     * Sets lowest_prices
     *
     * @param \Swagger\Client\Model\LowestPrices $lowest_prices A list of the lowest prices for the item.
     *
     * @return $this
     */
    public function setLowestPrices($lowest_prices)
    {
        $this->container['lowest_prices'] = $lowest_prices;

        return $this;
    }

    /**
     * Gets buy_box_prices
     *
     * @return \Swagger\Client\Model\BuyBoxPrices
     */
    public function getBuyBoxPrices()
    {
        return $this->container['buy_box_prices'];
    }

    /**
     * Sets buy_box_prices
     *
     * @param \Swagger\Client\Model\BuyBoxPrices $buy_box_prices A list of item prices.
     *
     * @return $this
     */
    public function setBuyBoxPrices($buy_box_prices)
    {
        $this->container['buy_box_prices'] = $buy_box_prices;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return \Swagger\Client\Model\MoneyType
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \Swagger\Client\Model\MoneyType $list_price The list price of the item as suggested by the manufacturer.
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets suggested_lower_price_plus_shipping
     *
     * @return \Swagger\Client\Model\MoneyType
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->container['suggested_lower_price_plus_shipping'];
    }

    /**
     * Sets suggested_lower_price_plus_shipping
     *
     * @param \Swagger\Client\Model\MoneyType $suggested_lower_price_plus_shipping The suggested lower price of the item, including shipping and Amazon Points. The suggested lower price is based on a range of factors, including historical selling prices, recent Buy Box-eligible prices, and input from customers for your products.
     *
     * @return $this
     */
    public function setSuggestedLowerPricePlusShipping($suggested_lower_price_plus_shipping)
    {
        $this->container['suggested_lower_price_plus_shipping'] = $suggested_lower_price_plus_shipping;

        return $this;
    }

    /**
     * Gets buy_box_eligible_offers
     *
     * @return \Swagger\Client\Model\BuyBoxEligibleOffers
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->container['buy_box_eligible_offers'];
    }

    /**
     * Sets buy_box_eligible_offers
     *
     * @param \Swagger\Client\Model\BuyBoxEligibleOffers $buy_box_eligible_offers A list that contains the total number of offers that are eligible for the Buy Box for the given conditions and fulfillment channels.
     *
     * @return $this
     */
    public function setBuyBoxEligibleOffers($buy_box_eligible_offers)
    {
        $this->container['buy_box_eligible_offers'] = $buy_box_eligible_offers;

        return $this;
    }

    /**
     * Gets offers_available_time
     *
     * @return \DateTime
     */
    public function getOffersAvailableTime()
    {
        return $this->container['offers_available_time'];
    }

    /**
     * Sets offers_available_time
     *
     * @param \DateTime $offers_available_time When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing.
     *
     * @return $this
     */
    public function setOffersAvailableTime($offers_available_time)
    {
        $this->container['offers_available_time'] = $offers_available_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


