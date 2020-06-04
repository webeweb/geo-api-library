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

use WBW\Library\GeoAPI\Model\Response\Region\ListeRegionsResponse;
use WBW\Library\GeoAPI\Serializer\RegionResponseDeserializer;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Région response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Serializer
 */
class RegionResponseDeserializerTest extends AbstractTestCase {

    /**
     * Tests the deserializeListeRegionsResponse() method.
     *
     * @return void
     */
    public function testDeserializeListeRegionResponse() {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/RegionResponseDeserializerTest.testDeserializeListeRegionsResponse.json");

        $res = RegionResponseDeserializer::deserializeListeRegionsResponse($json);
        $this->assertInstanceOf(ListeRegionsResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertCount(18, $res->getRegions());

        $this->assertEquals("Guadeloupe", $res->getRegions()[0]->getNom());
        $this->assertEquals("01", $res->getRegions()[0]->getCode());
        $this->assertNull($res->getRegions()[0]->getScore());
    }
}