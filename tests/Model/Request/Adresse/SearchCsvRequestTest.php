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

use WBW\Library\GeoAPI\Model\Request\Adresse\SearchCsvRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Search CSV request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Adresse
 */
class SearchCsvRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/search/csv/", SearchCsvRequest::RESOURCE_PATH);

        $obj = new SearchCsvRequest();

        $this->assertEquals(SearchCsvRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getData());
    }
}