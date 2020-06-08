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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestArrayFieldsTrait;

/**
 * Array fields trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class ArrayFieldsTraitTest extends AbstractTestCase {

    /**
     * Tests the aadField() method.
     *
     * @return void
     */
    public function testAddField() {

        $obj = new TestArrayFieldsTrait();

        $obj->addField("field");
        $this->assertEquals("field", $obj->getFields()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestArrayFieldsTrait();

        $this->assertEquals([], $obj->getFields());
    }
}