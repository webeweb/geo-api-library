<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Request\Region;

use WBW\Library\GeoAPI\Model\Request\Region\DepartementsRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Départements request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Region
 */
class DepartementsRequestTest extends AbstractTestCase {

    /**
     * Tests the getResourcePath() method.
     *
     * @return void
     */
    public function testGetResourcePath(): void {

        $obj = new DepartementsRequest();
        $this->assertEquals(DepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());

        $obj->setCode("code");
        $this->assertEquals("/regions/code/departements", $obj->getResourcePath());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/regions/%s/departements", DepartementsRequest::RESOURCE_PATH);

        $obj = new DepartementsRequest();

        $this->assertEquals(DepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}