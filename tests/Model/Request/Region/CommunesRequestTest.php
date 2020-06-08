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

use WBW\Library\GeoAPI\Model\Request\Region\CommunesRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Communes request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Region
 */
class CommunesRequestTest extends AbstractTestCase {

    /**
     * Tests the getResourcePath() method.
     *
     * @return void
     */
    public function testGetResourcePath() {

        $obj = new CommunesRequest();
        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $obj->setCode("code");
        $this->assertEquals("/regions/code/communes", $obj->getResourcePath());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/regions/%s/communes", CommunesRequest::RESOURCE_PATH);

        $obj = new CommunesRequest();

        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getCode());
    }
}