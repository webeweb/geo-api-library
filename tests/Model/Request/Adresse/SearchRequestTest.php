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

use WBW\Library\GeoAPI\Model\Request\Adresse\SearchRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Search request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Request\Adresse
 */
class SearchRequestTest extends AbstractTestCase {

    /**
     * Tests the enumTypes() method.
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            SearchRequest::TYPE_HOUSE_NUMBER,
            SearchRequest::TYPE_LOCALITY,
            SearchRequest::TYPE_MUNICIPALITY,
            SearchRequest::TYPE_STREET,
        ];
        $this->assertEquals($res, SearchRequest::enumTypes());
    }

    /**
     * Tests the setAutocomplete() method.
     *
     * @return void
     */
    public function testSetAutocomplete(): void {

        $obj = new SearchRequest();

        $obj->setAutocomplete(true);
        $this->assertTrue($obj->getAutocomplete());
    }

    /**
     * Tests the setLimit() method.
     *
     * @return void
     */
    public function testSetLimit(): void {

        $obj = new SearchRequest();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Tests the setQ() method.
     *
     * @return void
     */
    public function testSetQ(): void {

        $obj = new SearchRequest();

        $obj->setQ("q");
        $this->assertEquals("q", $obj->getQ());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/search/", SearchRequest::RESOURCE_PATH);

        $this->assertEquals("housenumber", SearchRequest::TYPE_HOUSE_NUMBER);
        $this->assertEquals("locality", SearchRequest::TYPE_LOCALITY);
        $this->assertEquals("municipality", SearchRequest::TYPE_MUNICIPALITY);
        $this->assertEquals("street", SearchRequest::TYPE_STREET);

        $obj = new SearchRequest();

        $this->assertEquals(SearchRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getQ());
        $this->assertNull($obj->getLimit());
        $this->assertNull($obj->getAutocomplete());
        $this->assertNull($obj->getLat());
        $this->assertNull($obj->getLon());
        $this->assertNull($obj->getType());
    }
}