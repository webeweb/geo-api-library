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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestFloatLatTrait;

/**
 * Float lat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class FloatLatTraitTest extends AbstractTestCase {

    /**
     * Tests the setLat() method.
     *
     * @return void
     */
    public function testSetLat(): void {

        $obj = new TestFloatLatTrait();

        $obj->setLat(0.123456789);
        $this->assertEquals(0.123456789, $obj->getLat());
    }
}