<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model;

use WBW\Library\GeoAPI\Model\Departement;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Département test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model
 */
class DepartementTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Departement();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeRegion());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getScore());
    }
}