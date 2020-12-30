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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestStringCodeRegionTrait;

/**
 * String code région trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class StringCodeRegionTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegion() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TestStringCodeRegionTrait();

        $obj->setCodeRegion("codeRegion");
        $this->assertEquals("codeRegion", $obj->getCodeRegion());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringCodeRegionTrait();

        $this->assertNull($obj->getCodeRegion());
    }
}