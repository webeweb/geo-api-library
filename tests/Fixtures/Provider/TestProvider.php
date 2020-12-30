<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Fixtures\Provider;

use WBW\Library\GeoAPI\Provider\AbstractProvider;

/**
 * Test provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Fixtures\Provider
 */
class TestProvider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return "";
    }
}