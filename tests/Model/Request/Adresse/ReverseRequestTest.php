<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Request\Adresse;

use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Reverse request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Adresse
 */
class ReverseRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/reverse/", ReverseRequest::RESOURCE_PATH);

        $obj = new ReverseRequest();

        $this->assertEquals(ReverseRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getLat());
        $this->assertNull($obj->getLon());
    }
}