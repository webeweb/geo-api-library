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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestFloatLonTrait;

/**
 * Float lon trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class FloatLonTraitTest extends AbstractTestCase {

    /**
     * Tests the setLon() method.
     *
     * @return void
     */
    public function testSetLon(): void {

        $obj = new TestFloatLonTrait();

        $obj->setLon(0.123456789);
        $this->assertEquals(0.123456789, $obj->getLon());
    }
}