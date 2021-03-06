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

use WBW\Library\GeoAPI\Model\Commune;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Commune test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model
 */
class CommuneTest extends AbstractTestCase {

    /**
     * Tests the setCodesPostaux() method.
     *
     * @return void
     */
    public function testSetCodesPostaux(): void {

        $obj = new Commune();

        $obj->setCodesPostaux(["codePostal"]);
        $this->assertEquals(["codePostal"], $obj->getCodesPostaux());
    }

    /**
     * Tests the setPopulation() method.
     *
     * @return void
     */
    public function testSetPopulation(): void {

        $obj = new Commune();

        $obj->setPopulation(1);
        $this->assertEquals(1, $obj->getPopulation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Commune();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeDepartement());
        $this->assertNull($obj->getCodeRegion());
        $this->assertNull($obj->getCodesPostaux());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPopulation());
        $this->assertNull($obj->getScore());
    }
}