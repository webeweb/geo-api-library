<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Response;

use WBW\Library\GeoAPI\Tests\AbstractTestCase;
use WBW\Library\GeoAPI\Tests\Fixtures\Response\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Response
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestResponse();

        $this->assertNull($obj->getRawResponse());
    }
}