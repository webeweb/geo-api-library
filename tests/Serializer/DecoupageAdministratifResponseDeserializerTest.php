<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Serializer;

use WBW\Library\GeoAPI\Model\Response\CommunesResponse;
use WBW\Library\GeoAPI\Model\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Model\Response\RegionsResponse;
use WBW\Library\GeoAPI\Serializer\DecoupageAdministratifResponseDeserializer;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Découpage administratif response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Serializer
 */
class DecoupageAdministratifResponseDeserializerTest extends AbstractTestCase {

    /**
     * Tests the deserializeCommunesResponse() method.
     *
     * @return void
     */
    public function testDeserializeCommunesResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/DecoupageAdministratifResponseDeserializerTest.testDeserializeCommunesResponse.json");

        $res = DecoupageAdministratifResponseDeserializer::deserializeCommunesResponse($json);
        $this->assertInstanceOf(CommunesResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertCount(393, $res->getCommunes());

        $this->assertEquals("L'Abergement-Clémenciat", $res->getCommunes()[0]->getNom());
        $this->assertEquals("01001", $res->getCommunes()[0]->getCode());
        $this->assertEquals("01", $res->getCommunes()[0]->getCodeDepartement());
        $this->assertEquals("84", $res->getCommunes()[0]->getCodeRegion());
        $this->assertEquals(767, $res->getCommunes()[0]->getPopulation());
        $this->assertNull($res->getCommunes()[0]->getScore());
    }

    /**
     * Tests the deserializeDepartementsResponse() method.
     *
     * @return void
     */
    public function testDeserializeDepartementsResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/DecoupageAdministratifResponseDeserializerTest.testDeserializeDepartementsResponse.json");

        $res = DecoupageAdministratifResponseDeserializer::deserializeDepartementsResponse($json);
        $this->assertInstanceOf(DepartementsResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertCount(5, $res->getDepartements());

        $this->assertEquals("Calvados", $res->getDepartements()[0]->getNom());
        $this->assertEquals("14", $res->getDepartements()[0]->getCode());
        $this->assertEquals("28", $res->getDepartements()[0]->getCodeRegion());
        $this->assertNull($res->getDepartements()[0]->getScore());
    }

    /**
     * Tests the deserializeRegionsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRegionsResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/DecoupageAdministratifResponseDeserializerTest.testDeserializeRegionsResponse.json");

        $res = DecoupageAdministratifResponseDeserializer::deserializeRegionsResponse($json);
        $this->assertInstanceOf(RegionsResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertCount(18, $res->getRegions());

        $this->assertEquals("Guadeloupe", $res->getRegions()[0]->getNom());
        $this->assertEquals("01", $res->getRegions()[0]->getCode());
        $this->assertNull($res->getRegions()[0]->getScore());
    }
}