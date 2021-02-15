<?php
/**
 * ContentModuleType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
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
 * ContentModuleType Class Doc Comment
 *
 * @category Class
 * @description The type of A+ Content module.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentModuleType
{
    /**
     * Possible values of this enum
     */
    const COMPANY_LOGO = 'STANDARD_COMPANY_LOGO';
    const COMPARISON_TABLE = 'STANDARD_COMPARISON_TABLE';
    const FOUR_IMAGE_TEXT = 'STANDARD_FOUR_IMAGE_TEXT';
    const FOUR_IMAGE_TEXT_QUADRANT = 'STANDARD_FOUR_IMAGE_TEXT_QUADRANT';
    const HEADER_IMAGE_TEXT = 'STANDARD_HEADER_IMAGE_TEXT';
    const IMAGE_SIDEBAR = 'STANDARD_IMAGE_SIDEBAR';
    const IMAGE_TEXT_OVERLAY = 'STANDARD_IMAGE_TEXT_OVERLAY';
    const MULTIPLE_IMAGE_TEXT = 'STANDARD_MULTIPLE_IMAGE_TEXT';
    const PRODUCT_DESCRIPTION = 'STANDARD_PRODUCT_DESCRIPTION';
    const SINGLE_IMAGE_HIGHLIGHTS = 'STANDARD_SINGLE_IMAGE_HIGHLIGHTS';
    const SINGLE_IMAGE_SPECS_DETAIL = 'STANDARD_SINGLE_IMAGE_SPECS_DETAIL';
    const SINGLE_SIDE_IMAGE = 'STANDARD_SINGLE_SIDE_IMAGE';
    const TECH_SPECS = 'STANDARD_TECH_SPECS';
    const TEXT = 'STANDARD_TEXT';
    const THREE_IMAGE_TEXT = 'STANDARD_THREE_IMAGE_TEXT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMPANY_LOGO,
            self::COMPARISON_TABLE,
            self::FOUR_IMAGE_TEXT,
            self::FOUR_IMAGE_TEXT_QUADRANT,
            self::HEADER_IMAGE_TEXT,
            self::IMAGE_SIDEBAR,
            self::IMAGE_TEXT_OVERLAY,
            self::MULTIPLE_IMAGE_TEXT,
            self::PRODUCT_DESCRIPTION,
            self::SINGLE_IMAGE_HIGHLIGHTS,
            self::SINGLE_IMAGE_SPECS_DETAIL,
            self::SINGLE_SIDE_IMAGE,
            self::TECH_SPECS,
            self::TEXT,
            self::THREE_IMAGE_TEXT,
        ];
    }
}


