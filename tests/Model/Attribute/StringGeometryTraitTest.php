<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Model\Attribute;

use WBW\Library\GeoAPI\Tests\AbstractTestCase;
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestStringGeometryTrait;

/**
 * String geometry trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class StringGeometryTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeometry() method.
     *
     * @return void
     */
    public function testSetGeometry() {

        $obj = new TestStringGeometryTrait();

        $obj->setGeometry("geometry");
        $this->assertEquals("geometry", $obj->getGeometry());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestStringGeometryTrait();

        $this->assertNull($obj->getGeometry());
    }
}