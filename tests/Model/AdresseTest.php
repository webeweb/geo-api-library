<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model;

use WBW\Library\GeoAPI\Model\Adresse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Adresse test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model
 */
class AdresseTest extends AbstractTestCase {

    /**
     * Tests the addColumn() method.
     *
     * @return void
     */
    public function testAddColumn(): void {

        $obj = new Adresse();

        $obj->addColumn("k", "v");
        $this->assertEquals(["k" => "v"], $obj->getColumns());
    }

    /**
     * Tests the setCity() method.
     *
     * @return void
     */
    public function testSetCity(): void {

        $obj = new Adresse();

        $obj->setCity("city");
        $this->assertEquals("city", $obj->getCity());
    }

    /**
     * Tests the setCityCode() method.
     *
     * @return void
     */
    public function testSetCityCode(): void {

        $obj = new Adresse();

        $obj->setCityCode("cityCode");
        $this->assertEquals("cityCode", $obj->getCityCode());
    }

    /**
     * Tests the setContext() method.
     *
     * @return void
     */
    public function testSetContext(): void {

        $obj = new Adresse();

        $obj->setContext("context");
        $this->assertEquals("context", $obj->getContext());
    }

    /**
     * Tests the setDistance() method.
     *
     * @return void
     */
    public function testSetDistance(): void {

        $obj = new Adresse();

        $obj->setDistance("distance");
        $this->assertEquals("distance", $obj->getDistance());
    }

    /**
     * Tests the setDistrict() method.
     *
     * @return void
     */
    public function testSetDistrict(): void {

        $obj = new Adresse();

        $obj->setDistrict("district");
        $this->assertEquals("district", $obj->getDistrict());
    }

    /**
     * Tests the setHouseNumber() method.
     *
     * @return void
     */
    public function testSetHouseNumber(): void {

        $obj = new Adresse();

        $obj->setHouseNumber("houseNumber");
        $this->assertEquals("houseNumber", $obj->getHouseNumber());
    }

    /**
     * Tests the setLatitude() method.
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new Adresse();

        $obj->setLatitude("latitude");
        $this->assertEquals("latitude", $obj->getLatitude());
    }

    /**
     * Tests the setLongitude() method.
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new Adresse();

        $obj->setLongitude("longitude");
        $this->assertEquals("longitude", $obj->getLongitude());
    }

    /**
     * Tests the setOldCity() method.
     *
     * @return void
     */
    public function testSetOldCity(): void {

        $obj = new Adresse();

        $obj->setOldCity("oldCity");
        $this->assertEquals("oldCity", $obj->getOldCity());
    }

    /**
     * Tests the setOldCityCode() method.
     *
     * @return void
     */
    public function testSetOldCityCode(): void {

        $obj = new Adresse();

        $obj->setOldCityCode("oldCityCode");
        $this->assertEquals("oldCityCode", $obj->getOldCityCode());
    }

    /**
     * Tests the setPostcode() method.
     *
     * @return void
     */
    public function testSetPostcode(): void {

        $obj = new Adresse();

        $obj->setPostcode("postcode");
        $this->assertEquals("postcode", $obj->getPostcode());
    }

    /**
     * Tests the setScore() method.
     *
     * @return void
     */
    public function testSetScore(): void {

        $obj = new Adresse();

        $obj->setScore("score");
        $this->assertEquals("score", $obj->getScore());
    }

    /**
     * Tests the setStreet() method.
     *
     * @return void
     */
    public function testSetStreet(): void {

        $obj = new Adresse();

        $obj->setStreet("street");
        $this->assertEquals("street", $obj->getStreet());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Adresse();

        $this->assertEquals([], $obj->getColumns());
        $this->assertNull($obj->getCity());
        $this->assertNull($obj->getCityCode());
        $this->assertNull($obj->getContext());
        $this->assertNull($obj->getDistance());
        $this->assertNull($obj->getDistrict());
        $this->assertNull($obj->getHouseNumber());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getOldCity());
        $this->assertNull($obj->getOldCityCode());
        $this->assertNull($obj->getPostcode());
        $this->assertNull($obj->getScore());
        $this->assertNull($obj->getStreet());
        $this->assertNull($obj->getType());
    }
}
