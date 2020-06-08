<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Response;

use WBW\Library\GeoAPI\Model\Region;
use WBW\Library\GeoAPI\Model\Response\RegionsResponse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Régions response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Response
 */
class RegionsResponseTest extends AbstractTestCase {

    /**
     * Tests the addRegion() method.
     *
     * @return void
     */
    public function testAddRegion() {

        // Set a Région mock.
        $region = new Region();

        $obj = new RegionsResponse();

        $obj->addRegion($region);
        $this->assertSame($region, $obj->getRegions()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RegionsResponse();

        $this->assertEquals([], $obj->getRegions());
    }
}
