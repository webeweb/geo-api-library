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

use WBW\Library\GeoAPI\Request\Adresse\ReverseCsvRequest;
use WBW\Library\GeoAPI\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Request\Adresse\SearchCsvRequest;
use WBW\Library\GeoAPI\Request\Adresse\SearchRequest;
use WBW\Library\GeoAPI\Serializer\AdresseRequestSerializer;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Adresse request serializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Serializer
 */
class AdresseRequestSerializerTest extends AbstractTestCase {

    /**
     * Tests the serializeReverseCsvRequest() method.
     *
     * @return void
     */
    public function testSerializeReverseCsvRequest(): void {

        // Set a Reverse CSV request mock.
        $arg = new ReverseCsvRequest();
        $arg->setData("data");

        $res = AdresseRequestSerializer::serializeReverseCsvRequest($arg);
        $this->assertCount(1, $res);

        $this->assertEquals("data", $res["data"]);
    }

    /**
     * Tests the serializeReverseRequest() method.
     *
     * @return void
     */
    public function testSerializeReverseRequest(): void {

        // Set a Reverse request mock.
        $arg = new ReverseRequest();
        $arg->setLat(48.789);
        $arg->setLon(2.789);

        $res = AdresseRequestSerializer::serializeReverseRequest($arg);
        $this->assertCount(2, $res);

        $this->assertEquals(48.789, $res["lat"]);
        $this->assertEquals(2.789, $res["lon"]);
    }

    /**
     * Tests the serializeSearchCsvRequest() method.
     *
     * @return void
     */
    public function testSerializeSearchCsvRequest(): void {

        // Set a Search CSV request mock.
        $arg = new SearchCsvRequest();
        $arg->setData("data");

        $res = AdresseRequestSerializer::serializeSearchCsvRequest($arg);
        $this->assertCount(1, $res);

        $this->assertEquals("data", $res["data"]);
    }

    /**
     * Tests the serializeSearchRequest() method.
     *
     * @return void
     */
    public function testSerializeSearchRequest(): void {

        // Set a Search request mock.
        $arg = new SearchRequest();
        $arg->setQ("q");
        $arg->setLimit(15);
        $arg->setAutocomplete(false);
        $arg->setLat(48.789);
        $arg->setLon(2.789);
        $arg->setPostcode("postcode");
        $arg->setCityCode("cityCode");
        $arg->setType(SearchRequest::TYPE_STREET);

        $res = AdresseRequestSerializer::serializeSearchRequest($arg);
        $this->assertCount(7, $res);

        $this->assertEquals("q", $res["q"]);
        $this->assertEquals(15, $res["limit"]);
        $this->assertEquals(0, $res["autocomplete"]);
        $this->assertEquals(48.789, $res["lat"]);
        $this->assertEquals(2.789, $res["lon"]);
        $this->assertEquals("postcode", $res["postcode"]);
        $this->assertEquals("cityCode", $res["citycode"]);
    }
}