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
use WBW\Library\GeoAPI\Provider\DepartementProvider;
use WBW\Library\GeoAPI\Request\Departement\CommunesRequest;
use WBW\Library\GeoAPI\Request\Departement\DepartementsRequest;
use WBW\Library\GeoAPI\Response\CommunesResponse;
use WBW\Library\GeoAPI\Response\DepartementsResponse;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Département provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Provider
 */
class DepartementProviderTest extends AbstractTestCase {

    /**
     * Tests the communes() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("01");

        $obj = new DepartementProvider($this->logger);

        $res = $obj->communes($request);
        $this->assertInstanceOf(CommunesResponse::class, $res);
    }

    /**
     * Tests the departements() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDepartements(): void {

        // Set a Départements request mock.
        $request = new DepartementsRequest();

        $obj = new DepartementProvider($this->logger);

        $res = $obj->departements($request);
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }
}