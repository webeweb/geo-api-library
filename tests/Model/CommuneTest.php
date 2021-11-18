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
use WBW\Library\GeoAPI\Model\Departement;
use WBW\Library\GeoAPI\Model\Region;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;
use WBW\Library\GeoJson\Model\Geometry\Point;
use WBW\Library\GeoJson\Model\Geometry\Polygon;

/**
 * Commune test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model
 */
class CommuneTest extends AbstractTestCase {

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre(): void {

        // Set a Point mock.
        $centre = new Point();

        $obj = new Commune();

        $obj->setCentre($centre);
        $this->assertSame($centre, $obj->getCentre());
    }

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
     * Tests the setContour() method.
     *
     * @return void
     */
    public function testSetContour(): void {

        // Set a Polygon mock.
        $contour = new Polygon();

        $obj = new Commune();

        $obj->setContour($contour);
        $this->assertSame($contour, $obj->getContour());
    }

    /**
     * Tests the setDepartement() method.
     *
     * @return void
     */
    public function testSetDepartement(): void {

        // Set a Département mock.
        $departement = new Departement();

        $obj = new Commune();

        $obj->setDepartement($departement);
        $this->assertSame($departement, $obj->getDepartement());
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
     * Tests the setRegion() method.
     *
     * @return void
     */
    public function testSetRegion(): void {

        // Set a Région mock.
        $region = new Region();

        $obj = new Commune();

        $obj->setRegion($region);
        $this->assertSame($region, $obj->getRegion());
    }

    /**
     * Tests the setSurface() method.
     *
     * @return void
     */
    public function testSetSurface(): void {

        $obj = new Commune();

        $obj->setSurface(0.1);
        $this->assertEquals(0.1, $obj->getSurface());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Commune();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeDepartement());
        $this->assertNull($obj->getCodeRegion());
        $this->assertNull($obj->getCodesPostaux());
        $this->assertNull($obj->getContour());
        $this->assertNull($obj->getDepartement());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPopulation());
        $this->assertNull($obj->getRegion());
        $this->assertNull($obj->getScore());
        $this->assertNull($obj->getSurface());
    }
}