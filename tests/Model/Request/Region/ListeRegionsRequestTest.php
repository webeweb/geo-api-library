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

use WBW\Library\GeoAPI\Model\Request\Region\ListeRegionsRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Liste régions request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Region
 */
class ListeRegionsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/regions", ListeRegionsRequest::RESOURCE_PATH);

        $obj = new ListeRegionsRequest();

        $this->assertEquals(ListeRegionsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}