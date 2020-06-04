<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Response\Departement;

use WBW\Library\GeoAPI\Model\Departement;
use WBW\Library\GeoAPI\Model\Response\Departement\ListeDepartementsResponse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Liste départements response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Response\Departement
 */
class ListeDepartementsResponseTest extends AbstractTestCase {

    /**
     * Tests the addDepartement() method.
     *
     * @return void
     */
    public function testAddDepartement() {

        // Set a Département mock.
        $departement = new Departement();

        $obj = new ListeDepartementsResponse();

        $obj->addDepartement($departement);
        $this->assertSame($departement, $obj->getDepartements()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ListeDepartementsResponse();

        $this->assertEquals([], $obj->getDepartements());
    }
}
