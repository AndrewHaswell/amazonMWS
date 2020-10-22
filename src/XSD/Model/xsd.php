<?php

namespace AmazonMWS\AmazonXSD\XSD;

class AmazonXSD
{

    private $xsd_array;
    private $doc;
    private $xpath;

    public function __construct()
    {
        $this->xsd_array = [];
    }

    /**
     * @param string $title
     */
    public function load_amazon_xsd($title = 'Product')
    {
        // Get our XSD to parse
        $xsdstring = file_get_contents(dirname(__FILE__) . '/../' . $title . '.xsd');

        // Load XSD into DOM
        $this->doc = new \DOMDocument();
        $this->doc->loadXML(mb_convert_encoding($xsdstring, 'utf-8', mb_detect_encoding($xsdstring)));

        // Load DOM into Xpath
        $this->xpath = new \DOMXPath($this->doc);
        $this->xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

        // Get the top level elements
        $elements = $this->xpath->evaluate("/xsd:schema/xsd:element");

        $result = [];

        // Loop through each element and get the data we need
        foreach ($elements as $element) {
            $data = $this->extract_xsd_data_recursive($element);

            if (!empty($data)) {
                $result[] = $data;
            }
        }

        return $result;
    }

    /**
     * @param $indent
     * @param $element
     */

    private function extract_xsd_data_recursive($element, $complex = false)
    {
        if ($element->localName == 'annotation') {
            return [];
        }

        /* Debugging for Andy Haswell (20/10/2020) */ //dump($complex);
        /* End of Debugging */

        $thisNode = [];

        if ($element->localName == 'element') {

            $nextNode = $element->childNodes->item(1);
            $nextNodeName = !empty($nextNode) ?
              $nextNode->localName :
              '';

            if ($element->nodeType === 1) {
                $thisNode['name'] = $element->localName;
                if ($element->attributes->length > 0) {
                    $thisNode['attributes'] = $this->get_attributes($element);
                }
                if (!empty($nextNodeName)) {
                    switch ($nextNodeName) {
                        case 'sequence':
                            echo 'Its a sequence';
                            break;
                        case 'simpleType':
                            $thisNode['simpleType'] = $this->extract_simpleType($nextNode);
                            break;
                        case 'complexType':
                            //$thisNode['complexType'] = $this->extract_xsd_data_recursive($nextNode, true);
                            break;
                    }
                }
            }
        }

        $childNodes = $element->childNodes;

        if (!empty($childNodes)) {
            foreach ($childNodes as $childNode) {
                $result = $this->extract_xsd_data_recursive($childNode);
                if (!empty($result)) {
                    $thisNode['attributes'][] = $result;
                }
            }
        }

        return $thisNode;
    }

    /**
     * @param $element
     */

    public function get_attributes($element)
    {
        $attributes = [];
        foreach ($element->attributes as $attribute) {
            $attributes[$attribute->name] = $attribute->value;
        }
        return $attributes;
    }

    /**
     * @param $element
     */

    public function extract_simpleType($eleement)
    {
        $options = [];
        $drestrictions = [];

        $optionItems = $this->xpath->evaluate("xsd:restriction/xsd:enumeration", $eleement);

        foreach ($optionItems as $optionItem) {
            foreach ($optionItem->attributes as $attribute) {
                $options[] = $attribute->value;
            }
        }

        $restrictions = $this->xpath->evaluate("xsd:restriction", $eleement);

        foreach ($restrictions as $restriction) {
            $drestriction = $restriction->attributes->item(0);
            $drestrictions[] = $drestriction->value;
        }

        // TODO Any other options, for example
        /*        <xsd:simpleType>
                    <xsd:restriction base="xsd:normalizedString">
                        <xsd:maxLength value="2000"/>
                    </xsd:restriction>
                </xsd:simpleType>
        */
        return [
          'restriction' => $drestrictions,
          'values'      => $options
        ];
    }

}
