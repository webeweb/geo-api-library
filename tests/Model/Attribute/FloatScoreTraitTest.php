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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestFloatScoreTrait;

/**
 * Float score trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class FloatScoreTraitTest extends AbstractTestCase {

    /**
     * Tests the setScore() method.
     *
     * @return void
     */
    public function testSetScore(): void {

        $obj = new TestFloatScoreTrait();

        $obj->setScore(0.123456789);
        $this->assertEquals(0.123456789, $obj->getScore());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestFloatScoreTrait();

        $this->assertNull($obj->getScore());
    }
}