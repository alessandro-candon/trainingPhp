<?php

namespace test;

require_once __DIR__ . '/../bootstrap.php';

use PHPUnit\Framework\TestCase;
use src\XmlParser;

class XmlParserTest extends TestCase
{
    public function test_when_parse_xml_give_xml_string_then_get_name()
    {
        $xml = new XmlParser();
        $xmlInput =
           "<?xml version='1.0' encoding='UTF-8'?>
            <dataset>
                <record>
                    <id>1</id>
                    <first_name>Marrissa</first_name>
                    <last_name>McKinnon</last_name>
                    <email>mmckinnon0@tmall.com</email>
                    <gender>Female</gender>
                    <ip_address/>
                    <car/>
                </record>
            </dataset>";

        /** @var \SimpleXMLElement $personal */
        $personal = $xml->setContent($xmlInput)
            ->parse();

        /** @var string $expectedName */
        $expectedName = $personal->record[0]->first_name;

        $this->assertEquals('Marrissa', $expectedName);
    }

}