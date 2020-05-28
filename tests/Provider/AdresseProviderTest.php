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

use WBW\Library\GeoAPI\Provider\AdresseProvider;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Adresse provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Provider
 */
class AdresseProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("https://api-adresse.data.gouv.fr", AdresseProvider::ENDPOINT_PATH);
        $this->assertEquals("/search/", AdresseProvider::RESOURCE_PATH_SEARCH);
        $this->assertEquals("/search/csv/", AdresseProvider::RESOURCE_PATH_SEARCH_CSV);
        $this->assertEquals("/reverse/csv/", AdresseProvider::RESOURCE_PATH_REVERSE_CSV);
        $this->assertEquals("/reverse/csv/", AdresseProvider::RESOURCE_PATH_REVERSE_CSV);

        $obj = new AdresseProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals(AdresseProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}
