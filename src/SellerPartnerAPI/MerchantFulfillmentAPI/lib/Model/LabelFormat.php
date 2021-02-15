<?php
/**
 * LabelFormat
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
 * LabelFormat Class Doc Comment
 *
 * @category Class
 * @description The label format.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelFormat
{
    /**
     * Possible values of this enum
     */
    const PDF = 'PDF';
    const PNG = 'PNG';
    const ZPL203 = 'ZPL203';
    const ZPL300 = 'ZPL300';
    const SHIPPING_SERVICE_DEFAULT = 'ShippingServiceDefault';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
            self::PNG,
            self::ZPL203,
            self::ZPL300,
            self::SHIPPING_SERVICE_DEFAULT,
        ];
    }
}


