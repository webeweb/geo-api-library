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
use WBW\Library\GeoAPI\Model\Request\Commune\CommunesRequest;
use WBW\Library\GeoAPI\Model\Response\CommunesResponse;
use WBW\Library\GeoAPI\Provider\CommuneProvider;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Commune provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Provider
 */
class CommuneProviderTest extends AbstractTestCase {

    /**
     * Tests the communes() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCommunes() {

        // Set a Communes request mock.
        $request = new CommunesRequest();

        $obj = new CommuneProvider($this->logger);

        $res = $obj->communes($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }
}