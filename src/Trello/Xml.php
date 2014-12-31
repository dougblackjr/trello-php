<?php
/**
 * Trello Xml parser and generator
 * PHP version 5
 * superclass for Trello XML parsing and generation
 *
 * @copyright  2014 Steven Maguire
 */
final class Trello_Xml
{
    /**
     * @codeCoverageIgnore
     */
    protected function  __construct()
    {

    }

    /**
     * Build array from XML document
     *
     * @access public
     * @param string $xml
     *
     * @return array
     */
    public static function buildArrayFromXml($xml)
    {
        return Trello_Xml_Parser::arrayFromXml($xml);
    }

    /**
     * Build XML document from array
     *
     * @access public
     * @param array $array
     *
     * @return string
     */
    public static function buildXmlFromArray($array)
    {
        return Trello_Xml_Generator::arrayToXml($array);
    }
}
