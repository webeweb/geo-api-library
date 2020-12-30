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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestStringFormatTrait;

/**
 * String format trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class StringFormatTraitTest extends AbstractTestCase {

    /**
     * Tests the setFormat() method.
     *
     * @return void
     */
    public function testSetFormat(): void {

        $obj = new TestStringFormatTrait();

        $obj->setFormat("format");
        $this->assertEquals("format", $obj->getFormat());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringFormatTrait();

        $this->assertNull($obj->getFormat());
    }
}