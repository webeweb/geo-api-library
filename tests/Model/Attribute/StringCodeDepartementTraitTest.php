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
use WBW\Library\GeoAPI\Tests\Fixtures\Model\Attribute\TestStringCodeDepartementTrait;

/**
 * String code département trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Model\Attribute
 */
class StringCodeDepartementTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeDepartement() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new TestStringCodeDepartementTrait();

        $obj->setCodeDepartement("codeDepartement");
        $this->assertEquals("codeDepartement", $obj->getCodeDepartement());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestStringCodeDepartementTrait();

        $this->assertNull($obj->getCodeDepartement());
    }
}