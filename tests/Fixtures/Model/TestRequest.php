<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Fixtures\Model;

use WBW\Library\GeoAPI\Model\AbstractRequest;

/**
 * Test request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Fixtures\Model
 */
class TestRequest extends AbstractRequest {

    /**
     * {@inheritDoc}
     */
    public function getResourcePath() {
        return null;
    }
}