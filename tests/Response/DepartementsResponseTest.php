<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Response;

use WBW\Library\GeoAPI\Model\Departement;
use WBW\Library\GeoAPI\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Départements response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Response
 */
class DepartementsResponseTest extends AbstractTestCase {

    /**
     * Tests the addDepartement() method.
     *
     * @return void
     */
    public function testAddDepartement(): void {

        // Set a Departement mock.
        $departement = new Departement();

        $obj = new DepartementsResponse();

        $obj->addDepartement($departement);
        $this->assertSame($departement, $obj->getDepartements()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DepartementsResponse();

        $this->assertEquals([], $obj->getDepartements());
    }
}
