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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestStringDataTrait;

/**
 * String data trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class StringDataTraitTest extends AbstractTestCase {

    /**
     * Tests the setData() method.
     *
     * @return void
     */
    public function testSetData(): void {

        $obj = new TestStringDataTrait();

        $obj->setData("data");
        $this->assertEquals("data", $obj->getData());
    }
}