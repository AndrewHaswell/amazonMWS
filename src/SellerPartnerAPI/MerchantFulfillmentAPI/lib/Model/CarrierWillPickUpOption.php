<?php
/**
 * CarrierWillPickUpOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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
use \Swagger\Client\ObjectSerializer;

/**
 * CarrierWillPickUpOption Class Doc Comment
 *
 * @category Class
 * @description Carrier will pick up option.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CarrierWillPickUpOption
{
    /**
     * Possible values of this enum
     */
    const CARRIER_WILL_PICK_UP = 'CarrierWillPickUp';
    const SHIPPER_WILL_DROP_OFF = 'ShipperWillDropOff';
    const NO_PREFERENCE = 'NoPreference';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARRIER_WILL_PICK_UP,
            self::SHIPPER_WILL_DROP_OFF,
            self::NO_PREFERENCE,
        ];
    }
}


