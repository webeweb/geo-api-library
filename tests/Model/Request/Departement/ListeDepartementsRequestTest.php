<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Request\Departement;

use WBW\Library\GeoAPI\Model\Request\Departement\ListeDepartementsRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Liste départements request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Departement
 */
class ListeDepartementsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/regions/%d/departements", ListeDepartementsRequest::RESOURCE_PATH);

        $obj = new ListeDepartementsRequest();

        $this->assertEquals(ListeDepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}