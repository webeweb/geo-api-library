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

use WBW\Library\GeoAPI\Provider\DecoupageAdministratifProvider;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;
use WBW\Library\GeoAPI\Tests\Fixtures\Provider\TestDecoupageAdministratifProvider;

/**
 * Découpage administratif provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Provider
 */
class DecoupageAdministratifProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("https://geo.api.gouv.fr", DecoupageAdministratifProvider::ENDPOINT_PATH);

        $obj = new TestDecoupageAdministratifProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
        $this->assertEquals(DecoupageAdministratifProvider::ENDPOINT_PATH, $obj->getEndpointPath());
    }
}