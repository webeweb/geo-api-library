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
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseCsvRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\ReverseRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchCsvRequest;
use WBW\Library\GeoAPI\Model\Request\Adresse\SearchRequest;
use WBW\Library\GeoAPI\Model\Response\ReverseCsvResponse;
use WBW\Library\GeoAPI\Model\Response\SearchCsvResponse;
use WBW\Library\GeoAPI\Provider\AdresseProvider;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;
use WBW\Library\GeoJSON\Model\FeatureCollection;

/**
 * Adresse provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Provider
 */
class AdresseProviderTest extends AbstractTestCase {

    /**
     * Tests the reverse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReverse() {

        // Set a Reverse request mock.
        $arg = new ReverseRequest(49.897443, 2.290084);

        $obj = new AdresseProvider($this->logger);

        $res = $obj->reverse($arg);
        $this->assertInstanceOf(FeatureCollection::class, $res);

        $this->assertCount(1, $res->getFeatures());

        $this->assertEquals("draft", $res->getForeignMember("version"));
        $this->assertEquals("BAN", $res->getForeignMember("attribution"));
        $this->assertNotNull($res->getForeignMember("licence"));
        $this->assertEquals(1, $res->getForeignMember("limit"));
    }

    /**
     * Tests the reverseCsv() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testReverseCsv() {

        // Set a data mock.
        $data = getcwd() . "/tests/Fixtures/Model/Request/Adresse/ReverseCsvRequest.csv";

        // Set a Reverse request mock.
        $arg = new ReverseCsvRequest($data);

        $obj = new AdresseProvider($this->logger);

        $res = $obj->reverseCsv($arg);
        $this->assertInstanceOf(ReverseCsvResponse::class, $res);

        $this->assertNotEquals([], $res->getAdresses());
    }

    /**
     * Tests the search() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearch() {

        // Set a Search request mock.
        $arg = new SearchRequest("8 bd du port");

        $obj = new AdresseProvider($this->logger);

        $res = $obj->search($arg);
        $this->assertInstanceOf(FeatureCollection::class, $res);

        $this->assertCount(5, $res->getFeatures());

        $this->assertEquals("draft", $res->getForeignMember("version"));
        $this->assertEquals("BAN", $res->getForeignMember("attribution"));
        $this->assertNotNull($res->getForeignMember("licence"));
        $this->assertEquals($arg->getQ(), $res->getForeignMember("query"));
        $this->assertEquals(5, $res->getForeignMember("limit"));
    }

    /**
     * Tests the searchCsv() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchCsv() {

        // Set a data mock.
        $data = getcwd() . "/tests/Fixtures/Model/Request/Adresse/SearchCsvRequest.csv";

        // Set a Search request mock.
        $arg = new SearchCsvRequest($data);

        $obj = new AdresseProvider($this->logger);

        $res = $obj->searchCsv($arg);
        $this->assertInstanceOf(SearchCsvResponse::class, $res);

        $this->assertNotEquals([], $res->getAdresses());
    }

    /**
     * Tests the searchCsv() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchCsvWith() {

        // Set a data mock.
        $data = getcwd() . "/tests/Fixtures/Model/Request/Adresse/SearchCsvRequest.csv";

        // Set a Search request mock.
        $arg = new SearchCsvRequest($data);
        $arg->addColumn("adresse");
        $arg->addColumn("postcode");
        $arg->addResultColumn("result_id");
        $arg->addResultColumn("result_score");

        $obj = new AdresseProvider($this->logger);

        $res = $obj->searchCsv($arg);
        $this->assertInstanceOf(SearchCsvResponse::class, $res);

        $this->assertNotEquals([], $res->getAdresses());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("https://api-adresse.data.gouv.fr", AdresseProvider::ENDPOINT_PATH);

        $obj = new AdresseProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals(AdresseProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}
