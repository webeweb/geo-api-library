<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Request\Adresse;

use WBW\Library\GeoAPI\Request\Adresse\ReverseCsvRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Reverse CSV request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Request\Adresse
 */
class ReverseCsvRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/reverse/csv/", ReverseCsvRequest::RESOURCE_PATH);

        $obj = new ReverseCsvRequest();

        $this->assertEquals(ReverseCsvRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getData());
    }
}