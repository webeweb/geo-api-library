<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Provider;

use Exception;
use WBW\Library\GeoAPI\Provider\RegionProvider;
use WBW\Library\GeoAPI\Request\Region\DepartementsRequest;
use WBW\Library\GeoAPI\Request\Region\RegionsRequest;
use WBW\Library\GeoAPI\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Response\RegionsResponse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Région provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Provider
 */
class RegionProviderTest extends AbstractTestCase {

    /**
     * Tests the departements() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDepartements(): void {

        // Set a Départements request mock.
        $request = new DepartementsRequest();
        $request->setCode("11");

        $obj = new RegionProvider($this->logger);

        $res = $obj->departements($request);
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }

    /**
     * Tests the regions() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRegions(): void {

        // Set a Régions request mock.
        $request = new RegionsRequest();

        $obj = new RegionProvider($this->logger);

        $res = $obj->regions($request);
        $this->assertInstanceOf(RegionsResponse::class, $res);
    }
}