<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Request\Commune;

use WBW\Library\GeoAPI\Model\Request\Commune\CommunesRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Communes request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Commune
 */
class CommunesRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/communes", CommunesRequest::RESOURCE_PATH);

        $obj = new CommunesRequest();

        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getFormat());
        $this->assertNull($obj->getGeometry());
    }
}