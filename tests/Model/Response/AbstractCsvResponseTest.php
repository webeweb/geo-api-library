<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Response;

use WBW\Library\GeoAPI\Model\Adresse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Response\TestCsvResponse;

/**
 * Abstract CSV response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Response
 */
class AbstractCsvResponseTest extends AbstractTestCase {

    /**
     * Tests the addAdresse() method.
     *
     * @return void
     */
    public function testAddAdresse() {

        // Set an Adresse mock.
        $adresse = new Adresse();

        $obj = new TestCsvResponse();

        $obj->addAdresse($adresse);
        $this->assertSame($adresse, $obj->getAdresses()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestCsvResponse();

        $this->assertEquals([], $obj->getAdresses());
    }
}